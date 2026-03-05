#!/bin/bash
# Render startup script
# Force Apache to listen on 0.0.0.0 on the port Render assigns (default 80)

PORT="${PORT:-80}"

# Overwrite ports.conf with the correct port
cat > /etc/apache2/ports.conf <<EOF
Listen 0.0.0.0:${PORT}

<IfModule ssl_module>
    Listen 443
</IfModule>
<IfModule mod_gnutls.c>
    Listen 443
</IfModule>
EOF

# Update vhost to use correct port
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/" /etc/apache2/sites-available/000-default.conf

echo "Starting Apache on 0.0.0.0:${PORT}"

# Start Apache in foreground
apache2-foreground
