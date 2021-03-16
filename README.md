# Usage

Set-up the database: ```./vendor/bin/sail artisan migrate```

Pull the images and start the containers: ```./vendor/bin/sail up``` (this step can take a while)

Stop the containers: ```./vendor/bin/sail down```

The application runs on:
> http://localhost:80

Database is available on:
> http://localhost:8000

Database username (there is no password):
> root

For this test, we are using the table:
> example_app.points