#!/bin/bash

# Set the API endpoint and JWT token
URL="http://localhost:8000/api/user"  # Replace with the actual endpoint you want to test
JWT_TOKEN="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiN2U4ZDhmZTg3MTFkYzY4ZjA0MDg5YjA5MWUyMGZiNzdmZTUzOWFjMzlmOTA1NmVjYWZjODA1YmEyYWJiMTg5MGM1NzQwMDYzZWEyZTI5OGEiLCJpYXQiOjE3Mjg3MzAxODIuNDM0MzI5LCJuYmYiOjE3Mjg3MzAxODIuNDM0MzMxLCJleHAiOjE3NjAyNjYxODIuNDI0NTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.O-AmAUijCnBOhhvrL4NOHWYIqkq1HHe-Dtmufbbt8aaMG6xGYwhAdaYQr4H7xM5AjPWQCcekHSneAFt1Hz15mQytbIC-YQA7f_U6v-vWt3LnntWqUI4SA4jCbP1mdu7RcSW2byOzw8WoetMpwX514U5BxgpWk_iGjMNAisua0d7dDstVLC4ebgBd966P6DW5YODIfZ3xNuWl3jnfErWI98byz5tGyJ7qnG9ZUUYMEpPyXl1OMqf94sUDZuKrAnRM5mjHecqOBzJO6IElwZH1gacH41cp_2fB-uMR2ftqHvmTeGNdgCalfBgvNwwiKQUa6A17HvA_Cnv0Wmd_Q3CDjSLymSVxxPHdqJpnVr12coEOmtNw3uSKVfCKzc11Ca0r8SRt9gtSv0dWCtb_W9l1bc5fSSe2ODfmMbkCAX30UaJZOkv8j83OXi08OccPrZPWtHfZLBHxlNmhaV-Ca20ZBzdCS6B41UJ99tEOjN3kIy3Y87FhuurEhlVO5s11w0t6fxAAlYQ2JJgSdycBLwISbhXQ-xTYj5oxZrxlGumOGmvhVLfhirxSIG6gNqZ8BVHrZ_ZIxJx2aPuDQN8EpYh2TvEAUjlq5v3aR-Zr-FBfJK_pAvG9xLlySXbVXEFSL7kpLMGwYty_vWpxKMuiB_C_qERWDom2U95Y2AAF8hhfRyw"  # Replace with your actual token

# Make the API request to the protected route
response=$(curl -sL -X GET "$URL" \
    -H "Accept: application/json" \
    -H "Content-Type: application/json" \
    -H "Authorization: Bearer $JWT_TOKEN"
)

# Output the response
echo "Response: $response"
