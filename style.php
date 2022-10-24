<style type="text/css">

html{
    scroll-behavior:smooth;
}


*{margin: 0; padding:0; box-sizing: border-box;font-family: 'Mulish', sans-serif;}
.nav_style{
    background-color: #a29bfe!important; 
}
.row{margin-left: 0!important; margin-right: 0!important }
.nav_style 
    a{ color: white;}
    /*////////////main header \\\\\\\\\\\\\\\*/
    .main_header{
        height: 450px;
        width:100%;
    }

    .rightside h1{
        font-size: 3rem;
    }

    .corona_rot img{
        animation: gocorona 3s linear infinite;
    }
    @keyframes gocorona{
        0%{transform:rotate(0);}
       100%{transform:rotate(360deg);}
    }

    .leftside img{animation: heartbeat 5s linear infinite;}
    @keyframes heartbeat
    {
        0%
        {
            transform: scale(.75);
        }
        20%
        {
            transform: scale(1);
        }
        40%
        {
            transform: scale(.75);
        }
        60%
        {
            transform: scale(1);
        }
        80%
        {
            transform: scale(.75);
        }
        100%
        {
            transform: scale(.75);
        }
    }

/*******************corona update******************/

.corona_update{
    margin: 0 0 30px 0;
}
.corona_update h3{color: red;}

.corona_update h1{font-size:2rem; text-align: center;}

.corona img{animation: circle 10s linear infinite;}
    @keyframes circle
    {
        0%{transform:rotate(0);}
       100%{transform:rotate(360deg);}
    }

/*/////////////About section////////////////*/

.sub_section{
    background-color: #dcdcdc ;
}

.About_section{
    margin: 0 0 30px 0;
}
.About_section h1{color: black;}

.About_section h1{font-size:3rem; text-align: center;}


/*/////////////prevention////////////////*/

.Prevention{
    background-color: #dcdcdc ;
}
.Prevention{
    margin: 0 0 30px 0;
}
.Prevention h1{color: black;}

.Prevention h1{font-size:4rem; text-align: center;}

/*/////////////footer////////////////*/
.corona_update {
    background-color: #dcdcdc!important;
}

.corona_helpline_no {
    background-color: #dcdcdc!important;
}
.footer_style{
    background-color: #a29bf2;
    h1{color: black;}
}
.footer_style p{
    margin-bottom: 0!important;
}


/*/////////////responsive////////////////*/
@media(max-width:768px)
{.main_header{height:700px; text-align:center;}
.maheader h1{
    text-align:center;
    padding;0;
    width:100%;
    font-size:30px;}
}


.about_res{
    margin-left:0!important;
}





/* ---------------------STYLE 2---------------------*/


@font-face{
    font-family: 'Gilroy';
    src: url(./Gilroy-Regular.woff) format(woff);
}
/* ---------------------------------------------- */
/*                    GENERAL                     */
/* ---------------------------------------------- */
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Gilroy', sans-serif;
}
html{
    font-size: 16px;
}
.hide{
    display: none;
}
.fadeIn{
    animation: fade 0.5s ease-in-out;
}
@keyframes fade{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
/* ---------------------------------------------- */
/*                    HEADER                      */
/* ---------------------------------------------- */
header{
    display: flex;
    align-items: center;
    justify-content: space-between;

    max-width: 1200px;
    width: 100%;
    height: 60px;

    margin: 0 auto;

    background-color: #F3F2F2;
}
/* -------- LOGO -------- */
.logo{
    display: flex;
    align-items: center;
    padding-left: 20px;
}
.logo img{
    width: 60px;
}
.logo p {
    font-weight: bold;
    color: #6a149b;
}
/* -------- NAV -------- */
nav{
    
}

nav ul{
    display: flex;
    align-items: center;
}
nav ul li{
    list-style: none;
}
nav ul li:last-child{
    padding-right: 20px;
}
nav ul li a {
    text-decoration: none;
    color: #6a149b;
    padding: 10px;
}
/* ---------------------------------------------- */
/*                      MAIN                      */
/* ---------------------------------------------- */
main{
    max-width: 1200px;
    margin: 0 auto;
}
/* -------- BG IMAGE -------- */
.stats{
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.9), rgba(0,0,0,0.9)) ,url('bg.jpg');
    background-size: cover;
}
/* -------- LATEST REPORT -------- */
.latest-report{
    display: flex;
    justify-content: space-between;
    align-items: center;

    width: 80%;
    margin: 0 auto;
    padding-top: 50px;

    color: #FFF;
}

.country,
.total-cases,
.recovered,
.deaths{
    height: 100px;
}

.name{
    font-size: 2.2em;
    color: #be64f1;
    font-weight: bold;
}

.change-country{
    cursor: pointer;
}

.title{
    font-size: 1.3em;
}
.total-cases .value{
    font-size: 2em;
    font-weight: bold;
}
.recovered .value{
    font-size: 2em;
    font-weight: bold;
    color: #009688;
}
.deaths .value{
    font-size: 2em;
    font-weight: bold;
    color: #f44336;
}
.new-value{
    font-size: 1.3em;
}
/* -------- CHART -------- */
.chart{
    width: 80%;
    height: 70vh;
    min-height: 500px;

    margin: 0 auto;
    padding: 50px 0;
}
/* -------- SEARCH COUNTRY -------- */
.search-country{
    position: relative;
    top: 10px;
}
.search-box{
    position: absolute;
    
    display: flex;
    align-items: center;
    justify-content: space-between;

    width: 400px;
    height: 30px;

    background-color: #111;

    z-index: 1;
}
.search-box input{
    width: 360px;
    height: 25px;

    border: none;

    background-color: transparent;
    color: #FFF;

    padding-left: 15px;

    font-size: 1.1em;
}
.search-box img{
    width: 20px;
    padding-right: 5px;
    cursor: pointer;
}

.country-list{
    display: flex;

    position: absolute;
    top: 30px;

    width: 400px;
    height: 300px;

    background-color: #111;
    opacity: 0.9;

    overflow-y: scroll;
}

.country-list ul{
    width: 100%;
}

.country-list ul li{
    list-style: none;
    cursor: pointer;
    padding: 10px;
    color: #FFF;
}
.country-list ul li:hover{
    border-left: 1px solid #FFF;
}
/* SCROLL BAR */
.country-list::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  .country-list::-webkit-scrollbar-track {
    background: #111;
  }
  
  /* Handle */
  .country-list::-webkit-scrollbar-thumb {
    background: #F1F1F1;
  }
  
  /* Handle on hover */
  .country-list::-webkit-scrollbar-thumb:hover {
    background: #FFF;
  }
/* ---------------------------------------------- */
/*                    FOOTER                      */
/* ---------------------------------------------- */
footer{
    max-width: 1200px;
    height: 60px;

    margin: 0 auto;
    background-color: #6a149b;
}

.footer-container{
    height: 100%;
    display: flex;
    justify-content: center;
}

.copyright{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.copyright p{
    color: #FFF;
}
/* ---------------------------------------------- */
/*             SCREEN WIDTH < 600px               */
/* ---------------------------------------------- */
@media screen and (max-width: 600px){
    .latest-report{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
}




</style>
