#! /bin/sh
cd "pics_thumbs"
for i in *.jpg; do convert $i -resize 5% $(basename $i .jpg).jpg; done
