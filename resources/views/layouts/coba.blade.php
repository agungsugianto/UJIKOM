<!DOCTYPE html>
<html lang="en">
    
<!--
    Copyright (c) 2018 Felipe Barrella Netto

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
    SOFTWARE.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>

    <link rel="stylesheet" href="carouseria-src/carouseria.min.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet"> 
</head>
<body>
    <h1>Carouseria!</h1>

    <div id="carouseria" style="border-radius: 7px;">
        <div class="carouseria-item" style="background: linear-gradient(to bottom, #00a3d3, #00778d);">
            <div class="item-style">
                <h2>Container 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, beatae?</p>
            </div>
        </div>
        <div class="carouseria-item" style="background: linear-gradient(to bottom, #00a3d3, #00778d);">
            <div class="item-style">
                <h2>Container 2</h2>
            </div>
        </div>
        <div class="carouseria-item" style="background: linear-gradient(to bottom, #00a3d3, #00778d);">
            <div class="item-style">
                <h2>Container 3</h2>
            </div>
        </div>
    </div>
    <script type="application/javascript" src="carouseria-src/carouseria.min.js"></script>
    <script>
        // CÓDIGO DE INICIALIZAÇÃO DO CAROUSEL
        setCarousel("250px true vertical false true true");

        // CÓDIGO PARA CUSTOMIZAÇÃO NA PÁGINA 'INDEX' APENAS
        function contCheck(){setTimeout(()=>{var e=document.getElementById("carouseria").querySelector('[count="0"]'),
        t=document.getElementById("carouseria").querySelector('[count="1"]');e.style.opacity>0?(document.getElementById("c2_1")
        .disabled=!0,document.getElementById("c2_2").disabled=!0,document.getElementById("c1_1").disabled=!1,
        document.getElementById("c1_2").disabled=!1):t.style.opacity>0?(document.getElementById("c1_1").disabled=!0,
        document.getElementById("c1_2").disabled=!0,document.getElementById("c2_1").disabled=!1,document.getElementById("c2_2")
        .disabled=!1):(document.getElementById("c1_1").disabled=!0,document.getElementById("c1_2").disabled=!0,
        document.getElementById("c2_1").disabled=!0,document.getElementById("c2_2").disabled=!0)},300)}contCheck();
        function evenLis(){for(var c=0;c<indexContentChild.length;c++)indexContentChild[c].addEventListener("click",
        ()=>{contCheck()});for(var d=0;d<navContent.querySelectorAll('span').length;d++)navContent.querySelectorAll('span')[d]
        .addEventListener("click",()=>{contCheck()})}evenLis();function setForm(){var formItems={};var formShort=document
        .getElementById("tweakForm").elements;var queryline;for(var g=0;g<formShort.length;g++){if(formShort[g].name!="")
        formItems[formShort[g].name]=formShort[g].value}queryline=formItems.contHeight+formItems.contUnit+" ";queryline+=formItems.loopTf+" ";
        queryline+=formItems.movementDir+" ";queryline+=formItems.autoplayTf;queryline+=(formItems.autoplayTf=="true")?
        "|"+formItems.autoplayMilisec+" ":" ";queryline+=formItems.indexTf;queryline+=(formItems.indexTf=="true" && formItems.indexDir!="horizontal")?
        "|"+formItems.indexDir+" ":" ";queryline+=formItems.navTf;queryline+=(formItems.navTf=="true" && formItems.navDir!="horizontal")?
        "|"+formItems.navDir+" ":"";document.getElementById("SHOWQUERY").innerHTML="setCarousel(\""+queryline+"\")";setCarousel(queryline)}
        function resetForm(){document.getElementById("tweakForm").reset();}resetForm();
    </script>
</body>
</html>