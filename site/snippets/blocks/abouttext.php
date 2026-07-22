<style>
    .textblock .risdabouttext { }
    .abouttextlist li { display: none; }
    .abouttextlist li.selected {  display: inline; }
    .risdabouttext span, ul.abouttextlist { display: inline; padding: 0; }
    .descript {  grid-column: 1/13; text-align: center;  }
</style>
<section class="textblock">
    <div class="textblock--feature risdabouttext">
     <span>RISD GD is about </span>
    <ul class="abouttextlist">
    </ul>
</div>
<div class="descript">A growing list of now <span class="num"></span> attributes initiated by the faculty in October 2020; phrases pulled at random. Students and faculty may email risd.gd@risd.edu to add more.</div>
</section>
<script type="text/javascript">

function createListItem (text) {
  var li = document.createElement('li');
  li.textContent = text;
  return li;
}

function appendChildren (parent, children) {
    children.forEach(function (child) {
      parent.appendChild(child);
    })
}

var myList = document.querySelector(".abouttextlist");

var items = [
createListItem('facing the unknown'),
createListItem('moving forward'),
createListItem('freedom'),
createListItem('letting loose'),
createListItem('fearlessness'),
createListItem('learning together'),
createListItem('thinking outta the box'),
createListItem('being present for each other'),
createListItem('creating space'),
createListItem('the space between things'),
createListItem('home'),
createListItem('community'),
createListItem('play'),
createListItem('generous creativity'),
createListItem('designing language'),
createListItem('divergent thinking'),
createListItem('value'),
createListItem('asking questions'),
createListItem('experimenting with how humans communicate'),
createListItem('vectors'),
createListItem('inclusive thinking'),
createListItem('formal exploration'),
createListItem('deciding if kerning matters any more'),
createListItem('plurality'),
createListItem('moving from the past into the future'),
createListItem('responsibility for others'),
createListItem('establishing your own critical position'),
createListItem('— (mindful dash usage)'),
createListItem('procedural Shaders'),
createListItem('uncovering missing voices and narratives'),
createListItem('creating/ making space'),
createListItem('care'),
createListItem('activating space and mind.'),
createListItem('redefining'),
createListItem('seeing'),
createListItem('tools; past, present, future'),
createListItem('critical inquiry; knowledge production; social context'),
createListItem('collaborating'),
createListItem('empathy'),
createListItem('connections'),
createListItem('collaboration'),
createListItem('shifting'),
createListItem('dialogue'),
createListItem('taking things apart'),
createListItem('life'),
createListItem('the journey, not the end point'),
createListItem('community'),
createListItem('imagining the possibilities'),
createListItem('generosity'),
createListItem('open communication'),
createListItem('culture and community'),
createListItem('communication'),
createListItem('support'),
createListItem('creative community'),
createListItem('diverse p.o.v.'),
createListItem('collaborative list-making'),
createListItem('conversations'),
createListItem('play, fun, failure... finding and foraging community'),
createListItem('suspense'),
createListItem('curiosity'),
createListItem('creating new open structures'),
createListItem('experimentation'),
createListItem('drawing in the sand'),
createListItem('scale'),
createListItem('curiosity'),
createListItem('imagination'),
createListItem('confidence'),
createListItem('taking care of humans'),
createListItem('sharing'),
createListItem('open spaces'),
createListItem('taking a moment to think'),
createListItem('guided explorations'),
createListItem('more than Graphic Design'),
createListItem('joyous making'),
createListItem('imagining a better future'),
createListItem('expanding ideas'),
createListItem('the spirit of writing systems'),
createListItem('conversations and dialogues'),
createListItem('reaching'),
createListItem('meeting people who share your passions'),
createListItem('context'),
createListItem('creating new notions of expertise'),
createListItem('you'),
createListItem('play'),
createListItem('spending lots of time on details'),
createListItem('not having required answers'),
createListItem('embracing experimental ways of being and making'),
createListItem('flexibility of approach'),
createListItem('radical/critical shifting'),
createListItem('questioning norms and conventions'),
createListItem('evolving'),
createListItem('caring'),
createListItem('people power'),
createListItem('JOY!'),
createListItem('cognition'),
createListItem('empathy'),
createListItem('working alongside others'),
createListItem('inclusive animated lists, apparently'),
createListItem('forming a position'),
createListItem('multidisciplinary')
]

appendChildren (myList,items);

var n = document.querySelector(".descript");
var m = document.querySelector(".num");
m.innerText = items.length;

/* appends text to element   
    var textnode = document.createTextNode("text");         
    highlight.appendChild(textnode);                             
*/

var sampleArray = [
  'one',
  'two'
]

function getRandomIntInclusive(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1) + min); //The maximum is inclusive and the minimum is inclusive
}

function displayRandom() {
  var rect = n.getBoundingClientRect();
  console.log(rect.top);

if (rect.top>100) {
  var r = getRandomIntInclusive(1,items.length);
  //var highlight = document.querySelector(".abouttextlist li:nth-child(" + r + ")");


  var about_i;
/*
  tried switches but that's really when there is one expression with multiple outcomes
  not many ouctomes looking to match one value.  ${r}.`);
  }
    
*/

  for (about_i = 1; about_i <= items.length; about_i++) {

    if (about_i == r) { 
    let highlight = document.querySelector(".abouttextlist li:nth-child(" + about_i + ")");
    //console.log(highlight);
    highlight.classList.add("selected");
    //console.log("selected:"+about_i);
    //console.log("Total character length: "+highlight.textContent.length);
    


    } else {
    let highlight = document.querySelector(".abouttextlist li:nth-child(" + about_i + ")");
    highlight.classList.remove("selected");
    }
  }
}
  //highlight.style.color = "red";
  //console.log(highlight);

}

function swapHighlight() {
  var currHighlight = setInterval(displayRandom,3000);
  /* let swap = document.querySelector(".reload");
   swap.addEventListener('click', displayRandom);
  document.addEventListener('click', function (e) {
    clearInterval(currHighlight);  
  }); */
}

displayRandom();
swapHighlight();

//console.log(getRandomIntInclusive(1,items.length));
//console.log("Total character length: "+myList.textContent.length);
//console.log("Array length: "+items.length);

</script>