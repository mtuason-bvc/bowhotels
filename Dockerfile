# Use Nginx as the base image
FROM nginx:alpine
 
# Copy website files to the default Nginx directory
COPY . /usr/share/nginx/html
 
# Expose port 80
EXPOSE 80