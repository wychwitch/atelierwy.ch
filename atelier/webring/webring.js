// this references the file that holds the webring data
const g5v5z2 = `https://atelierwy.ch/webring/webring.json`;


const k7h9k8 = document.createElement("template");

// this is our webring styling
k7h9k8.innerHTML = `
<style>
.g5v5z2-webring {
  background-image:var(--g5v5z2-background-image);
  background-color:var(--g5v5z2-background-color);
  border:var(--g5v5z2-border);
  padding:var(--g5v5z2-padding); 
  max-width:var(--g5v5z2-width);
  height:var(--g5v5z2-height);
  border-radius:var(--g5v5z2-border-radius);
}
.g5v5z2-myUniqueClass .title {
  font-family:var(--g5v5z2-title-font);
  font-size:var(--g5v5z2-title-size);
  line-height:var(--g5v5z2-title-height);
  letter-spacing:var(--g5v5z2-title-spacing);
  color:var(--g5v5z2-title-color);
  margin:var(--g5v5z2-title-margin);
  text-align:var(--g5v5z2-title-align);
  font-weight:var(--g5v5z2-title-weight);
  
}
.g5v5z2-myUniqueClass {
font-family:var(--g5v5z2-text-family);
font-size:var(--g5v5z2-text-size);
line-height:var(--g5v5z2-text-height);
color:var(--g5v5z2-text-color);
text-align:var(--g5v5z2-text-align);
  letter-spacing:var(--g5v5z2-text-spacing);
}
.g5v5z2-myUniqueClass a {
color:var(--g5v5z2-link-color);
text-decoration:var(--g5v5z2-link-decoration);
font-size:var(--g5v5z2-link-size);
}
.g5v5z2-myUniqueClass p {
margin:var(--g5v5z2-text-margin);
}
.icon {
  font-size: 100px;
}
</style>

<div class="g5v5z2-webring">
  <div class="g5v5z2-myUniqueClass">

  </div>
</div>`;

// not really sure about this stuff, but don't delete it!
class k7v7y4 extends HTMLElement {
  connectedCallback() {
    this.attachShadow({ mode: "open" });
    this.shadowRoot.appendChild(k7h9k8.content.cloneNode(true));

    // e.g. https://css-tricks.com
    const thisSite = this.getAttribute("site"); 
    
    fetch(g5v5z2)
      .then((response) => response.json())
      .then((sites) => {
        // Finds the current site in the data
        const matchedSiteIndex = sites.findIndex(
          (site) => site.url === thisSite
        );
        
        const matchedSite = sites[matchedSiteIndex];

        let prevSiteIndex = matchedSiteIndex - 1;
        if (prevSiteIndex === -1) prevSiteIndex = sites.length - 1;

        let nextSiteIndex = matchedSiteIndex + 1;
        if (nextSiteIndex > sites.length - 1) nextSiteIndex = 0;

        const randomSiteIndex = this.getRandomInt(0, sites.length - 1);


        // In this variable, put the HTML that you want your webring "badge" to use.
        // keep the link 'href' values the same, but change the text!
        const cp = `
          <div class="title">Webring Title</div>
          <div class="extratext">
          <p>
            Here is some text!<br><br>
            This site is: <strong><a href="${matchedSite.url}"> ${matchedSite.name} </a></strong><br><br>
            This site is owned by: ${matchedSite.name}
          </p>
          </div>
          <p class="nav">
            
            <a href="${sites[nextSiteIndex].url}">[Next]</a>
            <a href="${sites[prevSiteIndex].url}">[Previous]</a>
            <a href="${sites[randomSiteIndex].url}">[Random]</a>
            <a href="https://yourwebsite.neocities.org/members.html">[Members]</a>
          </p>
        `;

        this.shadowRoot
          .querySelector(".g5v5z2-myUniqueClass")
          .insertAdjacentHTML("afterbegin", cp);
      });
  }

  // this calculates a random number
  getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
}

var rootVars = `:root {
  /* background! */
  --g5v5z2-background-image:url('https://sadgrl.online/images/bgs/tile/sparklebackground.gif');
  --g5v5z2-background-color:#000;
  --g5v5z2-border:5px solid aqua;
  --g5v5z2-border-radius:5px;
    /* sizing */
  --g5v5z2-width:250px;
  --g5v5z2-height:250px;
  --g5v5z2-padding:1rem;
  

  /* title! */
  --g5v5z2-title-font:'Arial';
  --g5v5z2-title-color:aqua;
  --g5v5z2-title-size:35px;
  --g5v5z2-title-align:center;
  --g5v5z2-title-margin:10px;
  /* line height & letter spacing */
  --g5v5z2-title-height:25px;
  --g5v5z2-title-spacing:3px;
  --g5v5z2-title-weight:bold;


  /* text! */
  --g5v5z2-text-family:sans-serif;
  --g5v5z2-text-color:lightblue;
  --g5v5z2-text-size:14px;
  --g5v5z2-text-align:center;
  --g5v5z2-text-spacing:1px;
  --g5v5z2-text-height:1em;

  /* links! */
  --g5v5z2-link-family:sans-serif;
  --g5v5z2-link-color:limegreen;
  --g5v5z2-link-decoration:none;
  --g5v5z2-link-weight:bold;
  --g5v5z2-link-size:13px;
}`

window.onload = function() {
var p = document.getElementsByTagName("body")[0];
var style = document.createElement('style');
var css = document.createTextNode(rootVars);
style.appendChild(css);
p.appendChild(style);

}

// whatever 'customElement' you define MUST be unique
// do not use the name 'webring-css' or you will conflict with other webrings
window.customElements.define("ring-729", k7v7y4);