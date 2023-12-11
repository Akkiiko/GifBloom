![Image](https://i.imgur.com/VY8OhVH.png")
        
## Learn about GifBloom

Welcome to GifBloom, an innovative open-source image sharing platform that seamlessly combines the ease of Imgur with the captivating addictiveness of TikTok. 

GifBloom is not just another image-sharing platform; it's a creative outlet where users can share, discover, and engage with images in a whole new way. 


## Previews

[Figma File](https://www.figma.com/file/KtM48Gx9he3bQAvDvzXVeU/GifBloom?type=design&node-id=0%3A1&mode=design&t=pncRruIrGg2ZKCfY-1)

<details>
    <summary>Landing Page</summary>
    <p align="center"><img src="https://i.imgur.com/rUB4NUC.png" alt="Project landing page"></p>
</details>

<details>
    <summary>Auth Modal</summary>
    <p align="center"><img src="https://i.imgur.com/E4Vtbwh.png" alt="Login popup"></p>
</details>

<details>
    <summary>Post Page</summary>
    <p align="center"><img src="https://i.imgur.com/IWvMf00.png" alt="Post page"></p>
</details>

<details>
    <summary>Upload Modal</summary>
    <p align="center"><img src="https://i.imgur.com/NnGQEgQ.png" alt="Upload modal"></p>
</details>

## Prerequisites

 - [PHP](https://www.php.net/)
 - [Composer](https://getcomposer.org/)
 - [MySQL](https://www.mysql.com/)

## Setup Guide

```
    git clone https://github.com/michaeltukdev/GifBloom.git
    cd GifBloom
    composer install
    rename .env.example to .env
    modify the .env files
    php artisan key:generate
    php artisan migrate
    php artisan storage:link
    php artisan serve
```


## Acknowledgements

 - [Laravel](https://laravel.com/)
 - [Laravel Livewire](https://livewire.laravel.com/)


## Authors

- [@akkiiko](https://www.github.com/akkiiko)


## License

[MIT](https://choosealicense.com/licenses/mit/)