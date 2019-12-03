#!/bin/bash

if [ $(whoami) != "root" ] 
then
	echo "I must be run as root!"
	exit
fi

echo "Success! Setting up environment now"

#backup initial html folder
[ -d html ] || cp -r /var/www/html .
rm /var/www/html/*
mysql -u root -pcoursework < database.txt

cp index.html /var/www/html
cp test.php /var/www/html
cp style.css /var/www/html
cp main.js /var/www/html
