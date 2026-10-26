<p align="center">
    <img src="screenshots/SpotifyLOGO.png" width="360" alt="Laravel Logo">
</p>

<h1 align="center">Esports API</h1>

### By Amadeo Yhulo D. Cruz VI
### Section: IT3E
### Resource Used: Esports

<hr>

<h2>1. Project Information</h2>


<p>This API manages esports team records with game_title, team_name, roster, and wins fields.</p>

<h2>2. Setup Instructions</h2>

<p><strong>Prerequisites:</strong> PHP, Composer, Git, and PHP SQLite extensions pdo_sqlite</code> and sqlite3.</p>

<h3>Step 1 - Clone the repository</h3>
git clone https://github.com/godkopi/cit3102-m5-esports.git
cd cit3102-m5-esports

<h3>Step 2 - Install PHP dependencies</h3>

composer install
<h3>Step 3 - Create the environment file and application key</h3>

Windows PowerShell:
Copy-Item .env.example .env
php artisan key:generate

<h3>Step 4 - Run migrations</h3>

php artisan migrate

<h3>Step 5 - Start the development server </h3>

php artisan serve

<h2>3. API Routes</h2>

<p>The Esports API contains nine routes. Public routes do not
require authentication, while protected routes require a
Laravel Sanctum Bearer token.</p>

<table>
  <thead>
    <tr>
      <th>HTTP Request</th>
      <th>Path</th>
      <th>What It Does</th>
      <th>Token Required</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>POST</td>
      <td><code>/api/register</code></td>
      <td>Registers a new user and returns a token</td>
      <td>No</td>
    </tr>
    <tr>
      <td>POST</td>
      <td><code>/api/login</code></td>
      <td>Authenticates a user and returns a token</td>
      <td>No</td>
    </tr>
    <tr>
      <td>POST</td>
      <td><code>/api/logout</code></td>
      <td>Revokes the current authentication token</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>GET</td>
      <td><code>/api/me</code></td>
      <td>Returns the authenticated user's information</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>GET</td>
      <td><code>/api/esports</code></td>
      <td>Lists esports records with optional filters</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>POST</td>
      <td><code>/api/esports</code></td>
      <td>Creates a new esports record</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>GET</td>
      <td><code>/api/esports/{esport}</code></td>
      <td>Retrieves one esports record by ID</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>PUT</td>
      <td><code>/api/esports/{esport}</code></td>
      <td>Updates an existing esports record</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td>DELETE</td>
      <td><code>/api/esports/{esport}</code></td>
      <td>Deletes an esports record</td>
      <td>Yes</td>
    </tr>
  </tbody>
</table>

<h2>4. 10 Screenshots</h2>

### Test 1: Registration — 201 Created
![Registration](screenshots/im1.png)

### Test 2: Login — 200 OK
![Login](screenshots/im2.png)

### Test 3: Unauthorized Access — 401 Unauthorized
![Unauthorized Access](screenshots/im3.png)

### Test 4: Authorized Access — 200 OK
![Authorized Access](screenshots/im4.png)

### Test 5: Create Esports Record — 201 Created
![Create Record](screenshots/im5.png)

### Test 6: Validation Error — 422 Unprocessable Entity
![Validation Error](screenshots/im6.png)

### Test 7: Retrieve Esports Record — 200 OK
![Retrieve Record](screenshots/im7.png)

### Test 8: Record Not Found — 404 Not Found
![Record Not Found](screenshots/im8.png)

### Test 9: Update Esports Record — 200 OK
![Update Record](screenshots/im9.png)

### Test 10: Delete Esports Record — 204 No Content
![Delete Record](screenshots/im10.png)

<h2>5. Why does DELETE return 204 and not 200?</h2>
<p>A <b>204</b> is returned because the content is deleted, no content is displayed and nothing to return. Unlike code <b>200</b>, it returns the data, json, and body. That is why the code <b>204</b> is the appropriate to use in Delete operations.</p>

