<?php

namespace App\Services;

use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class ReviewService
{
    public function get(array $parameters = null)
    {
        return Review::query()
            ->select('*')
            ->take($parameters['per_page'] ?? 5)
            ->orderBy('rvw_data->time', 'desc')
            ->get();
    }

    public function fetch(): JsonResponse
    {
        $url = 'https://maps.googleapis.com/maps/api/place/details/json';
        $params = [
            'place_id' => config('app.google_place_id'),
            'key' => config('app.google_api_key'),
            'fields' => 'reviews',
            'reviews_sort' => 'newest',
            'reviews_no_translations' => true
        ];

        $response = Http::get($url, $params);
        

        if ($response->failed()) {
            $statusCode = $response->status();
            $errorMessage = $response->body();

            return response()->json(['key' => 'error', 'success' => false, 'message' => $errorMessage], $statusCode);
        }

        $data = $response->json();
        if (!isset($data['result']['reviews'])) {
            return response()->json(['key' => 'success', 'success' => true, 'message' => 'No reviews']);
        }

        $response = $this->store($data['result']['reviews']);

        if ($response['success']) {
            return response()->json(['key' => 'success', 'success' => true, 'message' => __('message.review.fetch_passed')]);
        } else {
            return response()->json(['key' => 'error', 'success' => false, 'message' => __('message.review.fetch_failed').'->'.$response['message']]);
        }
    }

    private function store($data): array
    {
        try {
            foreach ($data as $reviewData) {
                if ($review = Review::query()->whereJsonContains('rvw_data->time', $reviewData['time'])->first()) {
                    $review = $this->updateObject($review, $reviewData);
                } else {
                    $review = $this->createObject($reviewData);
                }

                if (!$review->save()) {
                    return ['key' => 'error', 'success' => false, 'message' => __('message.review.create_failed'), 'data' => $reviewData];
                }
            }

            return ['key' => 'success', 'success' => true, 'message' => __('message.review.create_passed')];

        } catch (\Exception $e) {
            return ['key' => 'error', 'success' => false, 'message' => __('message.client.create_failed').' '.$e->getMessage(), 'data' => $data];
        }
    }

    private function createObject($data): Review {
        $object = new Review();
        $object->rvw_data = $data;
        return $object;
    }

    private function updateObject($object, $data): Review {
        $object->rvw_data = $data;
        return $object;
    }
}