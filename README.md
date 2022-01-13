Plant tracker api
---
Setup with Homestead
- Please follow this link to run the project in homestead: 
    - https://laravel.com/docs/8.x/homestead#installation-and-setup
- Once done setting up the database, run this command to migrate and seed data:
    - php artisan migrate:fresh --seed
- Sample base url: http://plant-tracker-api.test/

Plant tracker app
---

Tech:
- Laravel 8+ JSON API backend
- Frontend:
    - React (preferable: Next.js, TailwindCSS)
    - OR; Laravel Blade

A simple app comprised of 2 pages:
- Home page (listing of all plants)
- Add plant page (a form with the appropriate fields)

Plants should have the follow attributes:
- Name (single-line text)
- Species (single-line text)
- Watering instructions (multi-line text [preferable: Markdown])
- Photo (image)

To keep the test simple: 
- no authentication is required, anyone can publish a plant entry and view all existing entries
- no requirements for editing or deleting entries
- no requirements for hosting, however the app should run as expected if cloned and set up locally

Further requirements:
- Backend and frontend solutions should be hosted in seperate Github repos (if decoupled)
- Show understanding of relevant best practices for each langauge / framework
- Show understanding of good Git commit message structure, and general branch management

Links:
- Laravel: https://laravel.com/
- Next.js: https://nextjs.org/
- TailwindCSS: https://tailwindcss.com/
------------------------------------------
