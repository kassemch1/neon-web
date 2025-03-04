<div class="box">
    <p class="heading">Frequently asked questions</p>
    <div class="faqs">
        @foreach($faqs as $faq)
        <details>
            <summary style="color:#050913">{{$faq->question}}</summary>
            <p class="text" style="color:#050913">{{$faq->answer}}</p>
         </details>
        @endforeach
       

    </div>
 </div>

 <style>

@import url('https://fonts.googleapis.com/css?family=Rubik&display=swap');



.box {
   position: relative;
   width: 90%;
   margin: 100px auto;
   background: #050913;
   border-radius: 15px;
   padding: 20px;
   z-index: 1;
}

.box::before {
   content: "";
   position: absolute;
   top: -5px;
   left: -5px;
   right: -5px;
   bottom: -5px;
   background: linear-gradient(315deg, #7F00FF 40%, #E100FF 60%);
   border-radius: 20px;
   z-index: -1;
   filter: blur(10px);  /* Smooth glowing effect */
   opacity:1
}


.box .heading{
   
   border-radius: 7px 7px 0px 0px;
   padding: 10px;
   color: #fff;
   text-align: center;
   font-family: "Plus Jakarta Sans";
   font-size: 35px
}

.faqs{
   padding: 0px 20px 20px;
}

::-webkit-details-marker{
   float: right;
   margin-top: 3px;
}

details{
   background: #f6f6f6;
   padding: 10px 20px;
   border-radius: 7px;
   margin-top: 20px;
   font-family: "Rubik";
   font-size: 14px;
   letter-spacing: 1px;
   cursor: pointer;
}

details summary{
   outline: none;
}

</style>