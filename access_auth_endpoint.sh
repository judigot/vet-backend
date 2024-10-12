#!/bin/bash

# Set the API endpoint and JWT token
URL="http://localhost:8000/api/user"  # Replace with the actual endpoint you want to test
JWT_TOKEN="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODQ5MDU5YjAwZjViM2QzODM1MjY2M2QyZDA4ZTQyYWM3NmI5ZDA2ZWUwYzg1YTZkMmNhMjQ0ZTMwY2U5MzM5YTA1MzJkMDk0OTNiMzg0MWMiLCJpYXQiOjE3Mjg3MzIxNDUuNTcxMjMzLCJuYmYiOjE3Mjg3MzIxNDUuNTcxMjM1LCJleHAiOjE3NjAyNjgxNDUuNTU3OTg2LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.VJiLH17dgI-y-m5ckd3E9rntMf1ViXeA7sZvCYbyZIMutcN342-QweStNviSl2Z3l_FltL6Dfn8pagA5gsopR6lrWOVhLBaHN3jcqdVzub9qN7_3GvTdceQE8XavDR_j-W4Hac3Pfh3q0fzZmBSx7uoCyfnNryTp0OQwpuqTx3TfXOj1MiYeK2ask9gG-u7p3rZ4l7TtrbPmpQNmFWKeRwuW9Zp5WcIZDz-eGQkMMpPwWId7MiYJ-pcol1wVTUrPEL-kiUaz0ng6qmVw7q8XuRWD6Gx-W1IN21sBuA8VOWkNTIdeOEmKzzfMCZUbKPSMSAeoD1bST1WCu64mHGT-MjP1EawlPBkWrpTmCLRvcMV654rNCX7kcR7kiHN8we1i8vKNZ4Oh7gmUH1redkMlu1UHlAOlB3Na5fSyoiyxSeibIxRYsDDfp8DVE5gCsh19VHkWzpQDndRdQM3JCaUQ1D2KNmxQ4m8GgJBcWHAOqSNCK7kS2okeUUcZx9fYQY19XgEH-Ssq_IAMlV0D0TAHUaTIDntZWDgAbLDSY1j3hagAzPjcrq4eNswLHfVch1-Eko6ZhmALDVj3k-ZLiXfeMRG6ME1DgjQ7EsjD2Fyt-Ffwyffq_D-a76Wcmr8GBI20VCNa9DYO4CWb97U1LmrD5vXl_6vDuMApquGuj1vrmOY"  # Replace with your actual token

# Make the API request to the protected route
response=$(curl -sL -X GET "$URL" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -H "Authorization: Bearer $JWT_TOKEN"
)

# Output the response
echo "Response: $response"
