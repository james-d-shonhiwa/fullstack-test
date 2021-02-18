@extends('layouts/layout')

@section('content')
    
<div class="main-banner">
    <picture>
        <source srcset="images/banner-s.jpg" media="(max-width: 480px)">
        <source srcset="images/banner-m.jpg" media="(max-width: 768px)">
        <img srcset="images/banner.jpg" alt="banner">
    </picture> 
    <div class="banner-text"><h2>Super Soft, Stylish Bed Linen Made With Love</h2></div>
</div>

<main class="wrapper">

    <section id="selling-points">
        <div id="text-premium">
            <blockquote>Our premium products got the finest quality cotton that create an exquisite lightweight
                textile that’s both soft and crisp–guaranteed to give you a wonderfulnight’s sleep.</blockquote>
        </div>
        <ul>
            <li>
                <img src="images/premium1.jpg" alt="selling point">
                <button class="btn">Shop Bad Linens</button>
            </li>
            <li>
                <img src="images/premium2.jpg" alt="selling point">
                <button class="btn">Shop Bath Towels</button>
            </li>
       
            <li>
                <img src="images/premium3.jpg" alt="selling point">
                <button class="btn">Shop Bath Robes</button>
            </li>
            <li>
                <img src="images/premium4.jpg" alt="selling point">
                <button class="btn">Shop Home Fragrance</button>
            </li>
        </ul>
        
    </section>

    <section id="bestseller">
        <h2>Best Sellers</h2>
        <ul>
            <li>
                <img src="images/bestseller1.jpg" alt="selling point">
                <h3>Pellentesque</h3>
                <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
            </li>
            <li>
                <img src="images/bestseller2.jpg" alt="selling point">
                <h3>Pellentesque</h3>
                <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
            </li>
            <li>
                <img src="images/bestseller3.jpg" alt="selling point">
                <h3>Pellentesque</h3>
                <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
            </li>
        </ul>
        
    </section>

</main>

<section id="priority">
    <h2>Your Comfort Is Our #1 Priority</h2>
    <ul>
        <li>
            <img src="images/priority1.png" alt="selling point">
            <h3>Pellentesque</h3>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
        </li>
        <li>
            <img src="images/priority2.png" alt="selling point">
            <h3>Pellentesque</h3>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
        </li>
        <li>
            <img src="images/priority3.png" alt="selling point">
            <h3>Pellentesque</h3>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
        </li>
        <li>
            <img src="images/priority4.png" alt="selling point">
            <h3>Pellentesque</h3>
            <p>Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus.</p>
        </li>
    </ul>
    
</section>

<div id="quote">
    <blockquote>Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus erat porttitor. </blockquote>
    <a href="">Testimonials</a>
</div>

<section id="gallery">
    <div class="follow">
        <span>Follow us on </span> <i><img src="images/twitter2.png" alt=""></i>
    </div>

    <div>
        <ul>
            <li>
                <img src="images/gallery1.jpg" alt="selling point">
            </li>
            <li>
                <img src="images/gallery2.jpg" alt="selling point">
            </li>
        
            <li>
                <img src="images/gallery3.jpg" alt="selling point">
            </li>
            <li>
                <img src="images/gallery4.jpg" alt="selling point">
            </li>
        </ul>      
    </div>
    
</section>

<!-- <section id="gallery">
    <h2>Our Latest Works</h3>
    <ul>
        <li>
            <img src="images/snap-1.jpg" alt="work">
            <h3>Nobis Business Card</h3>
            <p class="tags">Business Card, Graphic</p>
            <p>Sed posuere consectetur est at lobortis. Porta sagittis lacus vel augue laoreet rutrum.</p>
        </li>
        <li>
            <img src="images/snap-2.jpg" alt="work">
            <h3>Nobis Business Card</h3>
            <p class="tags">Business Card, Graphic</p>
            <p>Sed posuere consectetur est at lobortis. Porta sagittis lacus vel augue laoreet rutrum.</p>
        </li>
        <li>
            <img src="images/snap-3.jpg" alt="work">
            <h3>Nobis Business Card</h3>
            <p class="tags">Business Card, Graphic</p>
            <p>Sed posuere consectetur est at lobortis. Porta sagittis lacus vel augue laoreet rutrum.</p>
        </li>
    </ul>
</section> -->
@endsection