#!/bin/bash

# Set the API endpoint and login credentials
URL="http://localhost:8000/api/login"  # Replace with the correct API login URL
EMAIL="john@example.com"              # Replace with the actual email
PASSWORD="123"               # Replace with the actual password

# Make the login API request with email and password
response=$(curl -sL -X POST "$URL" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -d '{
          "email": "'"$EMAIL"'",
          "password": "'"$PASSWORD"'"
        }'
)

# Check for errors and print the response
exitStatus=$?
if [ $exitStatus -ne 0 ]; then
    echo -e "\e[31mError in curl request with exit status: $exitStatus\e[0m" >&2
    exit 1
else
    # Print the full response
    echo "Response: $response"

    # Extract the token from the response (assuming it's a JSON response with a 'token' field)
    JWT_token=$(echo $response | grep -oP '(?<="token":")[^"]*')
    if [ -z "$JWT_token" ]; then
        echo -e "\e[31mFailed to extract token from response\e[0m" >&2
    else
        echo -e "\e[32mJWT Token: $JWT_token\e[0m"
    fi
fi
