#! /bin/sh
cp -r "$1/screenshots" "$1/screenshots_thumbs"
cd "$1/screenshots_thumbs"
for i in *.png; do convert $i -resize 10% $(basename $i .png).png; done
for i in *.JPG; do convert $i -resize 10% $(basename $i .JPG).JPG; done
for i in *.jpg; do convert $i -resize 10% $(basename $i .jpg).jpg; done
