



# Linker

## About the project 
My Linker project is inspired by website like [Linktree](https://linktr.ee/). I wanted to expand my simple Link Shortener application that I made before. Linker  allows you to register & login to create, update and delete your links page that you can then share with anybody you'd like! *In the future I will also probably add the option for users to either select themes for their link pages or just select colors (primary, secondary, ...) to improve user experience!*

## Technologies used to accomplish this solution are:

 - [Laravel](https://laravel.com/)
 - [Livewire v2](https://laravel-livewire.com/)
 - [TailwindCSS](https://tailwindcss.com/)
 
## Try it yourself!
First you need to clone the repository.

    git clone https://github.com/svareX/linker

Then install all the package and dependencies.

    composer install

After that you need to setup an .env file (use the .env.example as a template)

    copy .env.example .env




Generate a new application key

    php artisan key:generate
 
 Install front-end packages

    npm install

 Compile front-end assets in real-time

    npm run dev
       
**Now, you must leave this terminal window running and open a new one!**
<p>Create your database table.</p>

    php artisan migrate


While you have a local database server like [XAMPP](https://www.apachefriends.org/)
Then all you need to do is to start a local Laravel server.

    php artisan serve

## Image gallery

<p align="center">
<img src="https://i.ibb.co/HnksthG/Fire-Shot-Capture-015-Linker-localhost.png" alt="Fire-Shot-Capture-015-Linker-localhost">
</p>

<p align="center">
<img src="https://i.ibb.co/G5zqJx6/Fire-Shot-Capture-014-Linker-localhost.png" alt="Fire-Shot-Capture-014-Linker-localhost" >
</p>

<p align="center">
<img src="https://i.ibb.co/q97TQjW/Fire-Shot-Capture-017-Linker-localhost.png" alt="Fire-Shot-Capture-017-Linker-localhost">
</p>

## License
MIT License

Copyright (c) [2023]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
