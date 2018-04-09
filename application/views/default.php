server {
        listen 80 default_server;
        listen [::]:80 default_server;

        root /var/www/html/s2k/;

        index index.php index.html index.htm;

        server_name _;

        location / {
                # First attempt to serve request as file, then
                # as directory, then fall back to displaying a 404.
                try_files $uri $uri/ =404;
        }


        location ~ \.php$ {
                include snippets/fastcgi-php.conf;

                fastcgi_split_path_info ^(.+\.php)(/.+)$;
                #fastcgi_pass unix:/run/php/php5.6-fpm.sock;
                fastcgi_pass unix:/run/php/php7.0-fpm.sock;
                fastcgi_param                   SCRIPT_FILENAME $document_root$fastcgi_script_name;

                #fastcgi_pass unix:/run/php/php7.0-fpm.sock;
        }

        # deny access to .htaccess files, if Apache's document root
        # concurs with nginx's one
        #
        #location ~ /\.ht {
        #               deny all;
        #}
}
