#! /bin/sh
cp -r "pics" "pics_thumbs"
cd "pics_thumbs"
for i in *.JPG; do convert $i -resize 5% $(basename $i .JPG).JPG; done
