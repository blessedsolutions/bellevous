AuthUserFile /home/supanath/.htpasswds/bellevous/dev/.htpasswd
AuthGroupFile /dev/null
AuthName secure
AuthType Basic

require user bellevousdevadmin

order allow,deny
allow from all

# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

<FilesMatch "\.(ttf|otf|eot)$">
    <IfModule mod_headers.c>
        Header set Access-Control-Allow-Origin "*"
    </IfModule>
</FilesMatch>

# END WordPress
