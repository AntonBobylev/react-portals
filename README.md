# React-Portals

// TODO: description will be here

# Requirements

* Docker
* Node.js
* NPM or other package manager

# Install

* run the command in the project root directory: `docker compose up`
* go to the `application` directory and run the command: `npm install`
* inside the `application` directory run the command: `npm run dev`<br>
There will be url of the of project, go to this url in your browser.<br>
Create `.env.local` file in project root directory, paste gotten url to this file in variable `APP_CLIENT_APP_URL`.<br>
Like that: `APP_CLIENT_APP_URL=http://localhost:5173`<br>
That's it! This is a client of the current application.
* now go to http://localhost:7000/ <br>
If it didn't work you can see what port is used inside the docker application. See `webserver-1`<br>
This is a backend of the current application.
* create `.env.local` file in project root directory and configure some vary options:<br>
  * set `DATABASE_URL` variable to `DATABASE_URL="mysql://root:root@mysql:3306/react-portals?serverVersion=8.0.32&charset=utf8mb4"`