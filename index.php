<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>

.element-animation{
  animation: animationFrames ease 1s;
  animation-iteration-count: 1;
  transform-origin: 50% 50%;
  animation-fill-mode:forwards; /*when the spec is finished*/
  -webkit-animation: animationFrames ease 1s;
  -webkit-animation-iteration-count: 1;
  -webkit-transform-origin: 50% 50%;
  -webkit-animation-fill-mode:forwards; /*Chrome 16+, Safari 4+*/ 
  -moz-animation: animationFrames ease 1s;
  -moz-animation-iteration-count: 1;
  -moz-transform-origin: 50% 50%;
  -moz-animation-fill-mode:forwards; /*FF 5+*/
  -o-animation: animationFrames ease 1s;
  -o-animation-iteration-count: 1;
  -o-transform-origin: 50% 50%;
  -o-animation-fill-mode:forwards; /*Not implemented yet*/
  -ms-animation: animationFrames ease 1s;
  -ms-animation-iteration-count: 1;
  -ms-transform-origin: 50% 50%;
  -ms-animation-fill-mode:forwards; /*IE 10+*/
}

@keyframes animationFrames{
  0% {
    opacity:0;
    transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    transform:  translate(0px,0px)  ;
  }
}

@-moz-keyframes animationFrames{
  0% {
    opacity:0;
    -moz-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -moz-transform:  translate(0px,0px)  ;
  }
}

@-webkit-keyframes animationFrames {
  0% {
    opacity:0;
    -webkit-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -webkit-transform:  translate(0px,0px)  ;
  }
}

@-o-keyframes animationFrames {
  0% {
    opacity:0;
    -o-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -o-transform:  translate(0px,0px)  ;
  }
}

@-ms-keyframes animationFrames {
  0% {
    opacity:0;
    -ms-transform:  translate(0px,-25px)  ;
  }
  100% {
    opacity:1;
    -ms-transform:  translate(0px,0px)  ;
  }
}

.container {
  display: grid;
  grid-template-columns: 0.7fr 1.3fr 1fr;
  grid-template-rows: 0.5fr 1.5fr 1.5fr;
  width:100%;
  height:100%;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "header header header"
    "sidbar main-context main-context"
    "sidbar main-context main-context";
}

.sidbar { 
grid-area: sidbar; 
font-family: Brandon Grotesque Bold;
font-size:25px;
}

.main-context { grid-area: main-context; 
background: rgb(183,218,237);
background: linear-gradient(90deg, rgba(183,218,237,1) 0%, rgba(215,233,223,1) 36%);

}

.header { grid-area: header; }

h1{
font-family: Brandon Grotesque Black;
text-align:center;
}

#content {
  <!-- background: rgb(183,218,237);
background: linear-gradient(90deg, rgba(183,218,237,1) 0%, rgba(215,233,223,1) 36%);
-->
    grid-area: content;
    position: relative;
	top: 30px;
}

ul{
font-family: Brandon Grotesque Black;
}

ul:hover{
 
 cursor: pointer;
}

.alignleft {
	float: left;
}
.alignright {
	float: right;
}

p{
font-family: Brandon Grotesque;
text-align:center;
}

.proLeft{
float: left;
margin-left: 200px;
font-family: Brandon Grotesque Light;
}

li{
font-family: Brandon Grotesque Light;
margin-bottom:10px;
}

.imgs{
width:300px; 
height:300px; 
float:right;
}

</style>
</head>

<body>
<div class="container" style="height:1100px;">
<div class="header"  style="
        margin-left: 230px;">
  <h1 style="font-size:40px;">Future Fabrics</h1>
  </div>


  <div class="sidbar">
<ul class="element-animation switchClick" data-target="div1"> ORGANIC COTTON</ul>
<ul class="element-animation switchClick" data-target="div2"> ORGANIC BAMBOO</ul>
<ul class="element-animation switchClick" data-target="div3"> ECONLY</ul>
<ul class="element-animation switchClick" data-target="div4"> 37.5 TECHNOLOGY</ul>
<ul class="element-animation switchClick" data-target="div5"> RECYCLED PET</ul>
<ul class="element-animation switchClick" data-target="div6"> TENCEL</ul>
<ul class="element-animation switchClick" data-target="div7"> CUPRO</ul>
<ul class="element-animation switchClick" data-target="div8"> RECYCLED LEATHER</ul>
<ul class="element-animation switchClick" data-target="div9"> SUPIMACUTTON</ul>
<ul class="element-animation switchClick" data-target="div10"> MODAL</ul>
<ul class="element-animation switchClick" data-target="div11"> CORK</ul>
<ul class="element-animation switchClick" data-target="div12"> ECOVERO</ul>
<ul class="element-animation switchClick" data-target="div13"> WOOL</ul>
<ul class="element-animation switchClick" data-target="div14"> ORGANIC WOOL</ul>
<ul class="element-animation switchClick" data-target="div15"> PINATEX</ul>
  </div>
  
  
  <div class="main-context">
  
  <div id="div1" class="switchDiv">
  <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">ORGANIC COTTON</h1>
	<img src="rename.png"  class="imgs">
<div >
<p>Organic Cotton is cotton that is grown organically, without the use of harmful chemicals, leaving soils free from substances that may cause harm.

<br><br>Organic Cotton is found in a wide range of clothing, footwear, homeware, children, and personal care products, from t-shirts and jeans to towels and bathrobes.

<br><br>When you choose to shop Organic Cotton, you can save water, energy, and carbon emissions.</p>
<div style="float: left;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Low water requirements</li>
	<li>Low energy requirements</li>
	<li>Made from renewable resources</li>
	<li>Chemical control</li>
	<li>No GMO</li>
	<li>No soil erosion</li>
	<li>Biodegradable</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Smaller yield. Growing organic cotton requires more land</li>
    <li>More expensive to produce and sell</li>
	</ul>
	<div>
	
</div>
	</div>
	</div>
	</div>
	</div>
	</div>
  
  
  <div id="div2" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">ORGANIC BAMBOO</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Organic Bamboo, also known as viscose rayon, is a silky material made from bamboo fibres. Because of its soft and durable nature, organic bamboo is used to make products such as underwear, towels, bedsheets, and shirts. The fabric is soft, breathable, and smooth and is an alternative to cotton.</p>
<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Organic Bamboo uses 1/3 less water to grow than non-organic cotton, and it rarely, if ever, needs replanting.</li>
     <li>It’s stronger and softer than cotton, as well as being 40% more absorbent and breathable.</li>
     <li>It also smells better and stays cleaner for longer because of its antimicrobial properties, referred to as “Bamboo Kun,” so it requires less washing energy per wear.</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>The production process involves many chemicals which eliminate some of the natural benefits of bamboo, particularly its anti-bacterial effect.</li>
	</ul>
	<div>
	
</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div id="div3" class="switchDiv" style="display:none">
  <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">ECONLY®</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>ECONYL® or regenerated nylon is an eco-friendly alternative to nylon, made from waste products.

<br><br>It is made up of a continuing cycle where materials including unwanted carpets destined for landfill, fishing nets from aquaculture, and ghost nets, are rescued, regenerated, remade, and reimagined.

<br><br>Not only does ECONYL tackle the solution of waste, but it also reduces Nylon’s impact on global warming. For every 10,000 tons of ECONYL produced, 70,000 tons of crude oil is saved, making it the perfect alternative to nylon.

ECONLY® can be found clothes, handbags, lingerie, and sportswear.</p>
<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Low water requirements</li>
	<li>Low energy requirements</li>
	<li>Made of waste</li>
	<li>No GMO</li>
	<li>No soil erosion</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Recyclable but not biodegradable or compostable</li>
    <li>Toxic chemicals can be emitted as the material decomposes</li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div id="div4" class="switchDiv" style="display:none">
  <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">37.5® TECHNOLOGY</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>37.5 Technology is a “dynamic thermoregulation technology that is triggered by humidity.” In other words, it is an innovative technology made from volcanic sand that helps retain your body’s core temperature of 37.5 degrees Celsius.

<br><br>37.5 technology works when triggered by humidity. So, whether you are hot or cold, the technology will activate particles within the material used. For example, when you are hot, the active particles will use your body’s energy to cool you down and remove all moisture, and vice versa.

<br><br>Originally designed for sportswear, 37.5 technology has been used in a variety of clothing and footwear.</p>

<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Better performance</li>
 <li>Better sleep</li>
 <li>Less moisture – 37.5 technology is proven to keep you dry, delaying the onset of sweat</li>
 <li>Stabilised temperature</li>
 <li>Biodegradable</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Can be expensive</li></ul>
	<div>
	
</div>
	</div>
	</div>
	</div>
	</div>
	</div>



<div id="div5" class="switchDiv" style="display:none">
  <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">RECYCLED PET</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Recycled Polyester, also known as PET, is a man-made fabric produced from synthetic fiber’s such as its traditional counterpart, but rather than being used to utilise new materials to craft the fabric, recycled polyester makes use of existing plastic again and again.

<br><br>This soft yet tough fabric is a more sustainable option than polyester but still manages to maintain all the properties that make the fabric so popular.

<br><br>Its properties reduce the use of raw materials, which reduces the amount of environmental impact it has on our Landfills and our oceans. It also decreases greenhouse gas emissions by excluding the use of virgin material.</p>

<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Low water requirements</li>
<li>Low energy requirements</li>
<li>Made from waste</li>
<li>No GMO</li>
<li>No soil erosion</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Non-biodegradable and takes years to disappear once thrown away.</li>
<li>Releases plastic microfibres</li>
</ul>
	</div>
	</div>
	
	

</div>	
	</div>
	</div>
	
	
	<div id="div6" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">TENCEL</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Lyocell is a light fabric that is often used in casual wear, and TENCEL® is just the brand name. It is a cellulose fibre made from dissolving wood pulp and uses a drying process called spinning.

<br><br>TENCEL® is 50% more absorbent than Cotton. With the fabric being more breathable and less susceptible to odorous bacteria growth, it makes the perfect fabric for activewear.

</p><div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Low water requirements</li>
<li>Made from renewable resources</li>
<li>Chemical control</li>
<li>No GMO</li>
<li>No soil erosion</li>
<li>Biodegradable</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>High use of energy during the production process</li>
	</ul>
	</div>
	
</div>
	
	</div>
	</div>
	</div>
	
	
	<div id="div7" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">CUPRO</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Cupro, also known as Cuprammonium rayon, Cupra, ammonia silk, and Bemberg, are all the names of a plant-based material made out of cotton waste.

<br><br>It is vegan, cruelty-free, and its luxurious qualities make it the perfect alternative for silk.

<br><br>It is often used in thin, sheer garments, colourful prints, and sportswear due to its highly breathable nature and sheer, lightweight properties.

</p>
<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Low water requirements</li>
<li>Low energy requirements</li>
<li>Made of waste product</li>
<li>Made from renewable resources</li>
<li>Chemical control</li>
<li>No soil erosion</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Uses harmful chemicals – even though the chemicals are reused multiple times, the disposal will have to occur at some point</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
	
	<div id="div8" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">RECYCLED LEATHER</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>E-Leather is the developer of engineered leather. Created in the UK, E-Leather has expanded across over 50 countries as the supplier for recycled leather to industries ranging from transport to footwear.

<br><br>A significant amount of leather is often unused and destined for landfills. Its revolutionary process turns leather into new, high-performance materials whilst achieving a lower environmental footprint. The materials made from recycled leather are more advanced and more durable than traditional leather.
</p>
<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Increase the amount of recycled content</li>
<li>Lower Carbon emissions</li>
<li>Reduce the use of scarce resources</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Can be expensive</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
	
	<div id="div9" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">SUPIMA COTTON</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Supima Cotton is another sustainable variation of cotton grown in the USA. It’s known as the cashmere of cotton and a substitute for silk.

<br><br>Fully compostable and zero waste. Each part of the Supima plant is harvested. Stalks, stems, and leaves are taken during the grinning process and are used locally for livestock bedding. And the Supima seeds are used to make cottonseed oil, leaving the remains to be used as a source of protein in feed mixes for livestock.

T-shirts, shirt dresses, underwear, nightgowns, and pyjamas are all examples of garments made out of Supima cotton.</p>
<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Strength – it is a strong fibre, twice as strong as regular cotton. It has longer fibres that can resist pulling or breaking, meaning that the final product will be more durable
<li>Softness –  the long length of the fibre produces smoother yarns, resulting in a softer fabric, ultimately leaving your products to feel sumptuously soft</li>
<li>Vibrance – its fine fibres can absorb dye with a long-lasting effect, meaning that the garment can retain colour better than regular cotton. Supima cotton products keep their colour after every wash, giving you many years of use</li>
</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>More expensive than traditional cotton</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
	<div id="div10" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">MODAL</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Modal is a semi-synthetic fibre and another form of rayon made from beech tree pulp. The production of modal is similar to that of viscose rayon but is considered to be more eco-friendly. Because of its breathable and soft nature, it is used in underwear, activewear, t-shirts, bedsheets, and towels.

<br><br>Modal is more expensive than viscose or cotton and is considered more luxurious. It is also an alternative to cotton or silk.</p>
<div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Biodegradable</li>
<li>Water absorbent</li>
<li>Lower carbon footprint</li>
<li>Lower energy requirements</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>The level of sustainability depends on each supplier and its own production process</li>
<li>Use of harmful chemicals during the production process</li>
<li>Forest destruction</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
	<div id="div11" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">CORK</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Cork fabric, also known as cork leather, is an eco-friendly alternative to leather and vinyl. It is a natural, high-quality fabric that is produced from shavings obtained from the bark of the cork of the oak tree.

<br><br>The production of cork fabric is a lengthy one. It takes time. The cork oak tree needs to be 25 years old, and the first harvest is unusable. However, after nine years, the second harvest can be used for fashion purposes.

<br><br>Why nine years? Well, this is how long it takes the tree to rebuild its bark! Because of this recovery process, the harvested cork absorbs more carbon dioxide compared to an unharvested one.
No trees are harmed in the harvesting process. This process is natural and helps prolong the lifespan of cork oak trees by up to 300 years.

In fashion, cork fabric is used to make wallets, handbags, shoes, and clothing.</p><div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Biodegradable</li>
<li>No harm to animals</li>
<li>Washable</li>
<li>Stain-resistant</li>
<li>Durable</li>
<li>Antimicrobial</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Can occasionally be brittle</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
		<div id="div12" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">ECOVERO</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>EcoVero is a sustainable alternative to viscose and silk. Unlike other forms of viscose, EcoVero sets stricter environmental standards.

<br><br>Produced by leading cellulose fibre producer Lenzing, EcoVero is made using sustainable wood from controlled sources.

EcoVero is soft, comfortable, breathable, and quick-drying. In fashion, EcoVero can be found in knitwear, sportswear, blouses, dresses, suits, and hats.

</p><div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Lower CO2 emissions</li>
<li>Lower water impact</li>
<li>Chemicals used are recovered and reused</li>
<li>Biodegradable and compostable</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Can be expensive</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	<div id="div13" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">WOOL</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Wool is a super soft, renewable natural fibre. It comes from a variety of animals; however, the most common type is from sheep.

<br><br>In fashion, it is used in knitwear such as sweatshirts, jumpers, scarves, and hats.

<br><br>The steps involved in manufacturing wool are shearing, cleaning, grading, and sorting, carding, spinning, weaving, and finishing.

Although wool is considered an eco-friendly fabric, there are some concerns about animal welfare. As the sheep are often not treated well and shearing can cause severe injuries to the animals.
</p><div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Less energy and water needed than other fibres</li>
<li>Eco-friendly</li>
<li>Renewable</li>
<li>Biodegradable</li>
<li>Natural Material</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Soil erosion</li>
<li>Animal cruelty</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
	<div id="div14" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">ORGANIC WOOL</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Organic wool is a natural alternative to wool. Its natural fibres are recyclable, biodegradable, and do not cause environmental pollution.

<br><br>Organic wool comes from sheep raised in natural, healthy conditions, meaning that they have been grazed on fertiliser and pesticide-free land and have not been exposed to harmful substances.</p><div style="float: left;width: 400px;height: 300px;">   
   <h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Renewable</li>
<li>Non-allergenic</li>
<li>Durable</li>
<li>No exposure to harsh chemicals</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Non-vegan</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	
	<div id="div15" class="switchDiv" style="display:none">
   <div id="content">
    <div id="inner-content" class="element-animation" >
	<h1 style="margin-bottom: 60px; font-family: Brandon Grotesque Black;">PINATEX</h1>
	<img src="rename.png"  class="imgs">
<div>
<p>Made from waste, Pina Fibre is a sustainable natural material drawn from the leaves of a pineapple. It uses by-products of pineapple harvests, meaning no extra resources are needed.

<br><br>Pina Fibre creates a sheer, stiff, and lightweight material traditionally used for formal wear and accessories ideal for subtropical climates. The fibre Piñatex is used as a replacement for leather in fashion and provides shoppers with a sustainable choice for a sustainable future.

<br><br>
</p>
<div style="float: left;width: 400px;height: 300px;"> 
<h2 style="font-family:Brandon Grotesque Black;">PROS</h2>
	<ul>
	<li>Low water requirements</li>
<li>Low energy requirements</li>
<li>Made of waste</li>
<li>Made from renewable resources</li>
<li>Chemical control</li>
<li>No soil erosion</li>
	</ul>
	
	</div>
	<div style="float: right;margin-right: 0px;width: 200px;margin-left: 0px;">
    <h2 style="font-family:Brandon Grotesque Black;">CONS</h2>
	<ul>
	<li>Fabric is expensive</li>
	</ul>
	</div>
	
</div>
</div>
	</div>
	</div>
	
	</div><!--clos tag for main-context-->
	</div>
  </div> <!-- closing tag for container div --> 
  
</body>


<script>

$(function(){

   $('.switchClick').click(function(){

         var target = $('#' + $(this).attr('data-target'));
         $('.switchDiv').not(target).hide();
         target.show();
   });
});

function back(){
window.history.back();
}

</script>

</html>
