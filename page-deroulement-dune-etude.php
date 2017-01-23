<?php get_header(); ?>

<style>
    
    .bg-deroulement {
        background-image: url(https://madebysidecar.com/assets/products/thumbs/printable-prototype-1.jpg);
        background-position: center;
        background-size: cover;
    }
    
    .deroulement h2 {
        text-align: left;
        padding-bottom: 0;
    }
    
    .deroulement h2::before {
        display: inline-block;
        margin-left: -5rem;
        width: 4rem;
        text-align: center;
        content: ">";
        background-color: #c31b21;
        border-radius: 100%;
        padding: .5rem;
        color: white;
        margin-right: 1rem;
        font-family: monospace;
    }
    
    .deroulement h2:nth-of-type(1)::before {
        content: "1";
    }
    .deroulement h2:nth-of-type(2)::before {
        content: "2";
    }
    .deroulement h2:nth-of-type(3)::before {
        content: "3";
    }
    .deroulement h2:nth-of-type(4)::before {
        content: "4";
    }
    .deroulement h2:nth-of-type(5)::before {
        content: "5";
    }
    .deroulement h2:nth-of-type(6)::before {
        content: "6";
    }
    .deroulement h2:nth-of-type(7)::before {
        content: "7";
    }
    .deroulement h2:nth-of-type(8)::before {
        content: "8";
    }
    .deroulement h2:nth-of-type(9)::before {
        content: "9";
    }
    
    .deroulement h2::after {
        display: none;
    }
    
    .timeline-border {
        border: 0.2em solid #c31b21;
        padding-left: 2em;
        margin-left: 2em;
        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABkCAMAAADqvX3PAAAAKlBMVEUAAADX19fX19fBwcHT09PX19fW1tbT09PW1tbV1dXOzs7Ozs7BwcHV1dX5uIg2AAAADnRSTlMAPQAKH0czAAApFAAAAHys1goAAAHwSURBVHja7ZfdcuMwCEb1GUIDcd//dZuk2n5rZzCKOzuzFzo3+XNOBAIHtQosxwi0XUw/jjh2qN1pVzV43FJwJIDLuq5tvaNmzxeEZI5wWP/p9v0gypgGYhGH8fL28yyM7ycOJkFlJW3tZDHhRdBjIO22JR6a1BGMgTAWopvr6BC1jSB1MDWyXYfvkpDlg4iiV83lITiuoXZL+U4/ltcNq2MhogaYBWMYjYU8HHfSRdTrCIOLYImemrfz8dMO6DlVGYyFMWz3tmuGY6GgO1ikXVM51JDXurBO0nyEcyPTnvOXvmyb0hzqfV64jUUYw47Re9CZe6EbeC+M39+TcfK/gTFZuxZgOSag7aMASwGkrQW1Y2lLwXRMx3RMx3T8Pw67FpSOcA5RCccOcTMNL05aRw7Fn2kizA7+1VNH6ENAOBgOxiIK888dHPVqh+Q/yeknzQfHkhx+nqyjT0QFzDUd2Skp53lp7PdFnEkYIhzQv/KRzJUV0QdDSON5+S14CEW0vqSTiAPWWDknCLsY0BZxnNP0L/Z9YQEO8yznXZ2yNwfgTu7rNFgj9aamvS9eZljMTNOeoybSGNwQkvZ+3XrCU07t4HmWSBjDLBzEwdSzhMYcRPRZNYmgdjA1FyahcKQIqpKZs8N0TMd0TMd0/BvHF8n9f8tHo7HcAAAAAElFTkSuQmCC');
        font-family: 'Lato', sans-serif;
        background-color: #fff;
        padding-right: 1em;

    }
    
    .timeline-border :last-child {
        padding-bottom: 1em;
    }
    
</style>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="banner banner-red">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>                
                </div>
            </div>
        </div>
    </div>
    <div class="banner bg-deroulement">
        <div class="container deroulement">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="timeline-border"><?php the_content(); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>