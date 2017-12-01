<template>

<div class="sourceCode">
    <h1>Source Code</h1>

    <p  class="copyright" style="padding:40px;">Copyright 2017 Microsomes
    <br><br>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
<br><br>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
    </p>

        <div class="downloadContainer">
            <div class="downloadButton">
                <a style="color:black" href="comingsoon.zip" download>Download</a>
            </div>
        </div>
</div>

</template>

<style scoped>
    .sourceCode h1{
        text-align:center;
    }
    .sourceCode{
        min-height:300px;
        margin-top:10px;
        border:1px solid #ddd;
        

    }

    .copyright{
         word-wrap: break-word;

    }
    .downloadContainer{
         height:50px;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .downloadButton{
        background:#ddd;
        width:200px;
        height:100%;
        cursor:pointer;
        display:flex;
        align-items:center;
        justify-content:center;
        border-radius:5px;
        margin-bottom:5px;
        transition:all .5s;

    }
    .downloadButton:hover{
        padding-bottom:10px;
        transform:scale(1.2);
    }


</style>