## Kmetik

RUN PROJECT


INSTALL DEPENDENCIES
    
    composer install
    npm install

ADD LINK to node_modules to /config/filesystems.php

    'links' => [
        public_path('storage') => storage_path('app/public'),
        public_path('node_modules') => base_path('node_modules'),
    ],

    php artisan storage:link

5 . SET ENV

    CODE_G_ANALYTICS
    WEB_NAME
    APP_NAME
    COMPANY_NAME=
    COMPANY_PHONE=
    COMPANY_EMAIL=
    COMPANY_STREET=
    COMPANY_CITY=
    COMPANY_COUNTRY=
    
    FACEBOOK_URL=
    FACEBOOK_PAGE_ID=

    INSTAGRAM_URL=

    GOOGLE_API_KEY=
    GOOGLE_PLACE_ID=
    GOOGLE_REVIEWS_URL=
    GOOGLE_ADD_REVIEW_URL=

6 . DATABASE
    
    php artisan migrate

CRON LINKS
    
    /cron/fetch-google-reviews ( to fetch reviews from google to database )
    