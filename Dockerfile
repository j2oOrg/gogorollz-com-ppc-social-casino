# Static site image built on nginx
FROM nginx:1.27-alpine

# Remove default nginx content before copying the static site.
RUN rm -rf /usr/share/nginx/html/*

# Copy the repository (filtered by .dockerignore) into the web root.
COPY . /usr/share/nginx/html

# Surface favicons/touch icons at the expected root paths for browsers.
RUN cp /usr/share/nginx/html/public/favicon.ico /usr/share/nginx/html/favicon.ico \
    && cp /usr/share/nginx/html/public/apple-touch-icon.png /usr/share/nginx/html/apple-touch-icon.png

EXPOSE 80

CMD ["nginx","-g","daemon off;"]
