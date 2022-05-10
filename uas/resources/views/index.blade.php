@extends('nav')
@section('title', 'index')
    
@section('konten')
<link rel="stylesheet" href="\css\kunang.css">

<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>
<div class="firefly"></div>


    <div class="wrapper">
        <!-- untuk home -->
        <section id="foreign">
            <div class="kolom">
                <br><br><br>
                <br>
                <h2> Fairy Tales From Around The World.</h2>
                <p>Fairy tales are stories that range from those in folklore to more modern stories defined as 
                    literary fairy tales. Despite subtle differences in the categorizing of fairy tales, folklore, 
                    fables, myths, and legends, a modern definition of the fairy tale, as provided by Jens Tismar's 
                    monologue in German, is a story that differs "from an oral folk tale", written by "a single identifiable 
                    author", which can be characterized as "simple and anonymous", and exists in a mutable and difficult 
                    to define genre with a close relationship to folktales(Wikipedia)</p>
                <p><a href="/foreign" class="tbl-pink">See More</a></p>
            </div>
            <img src="\img\kerajaan.png" width="600"/>
        </section>

        <!-- untuk courses -->
        <section id="lokal">
            <img src="\img\borobudur.png" width="600"/>
            <div class="kolom">
                <br><br><br>
                <br>
                <h2>Indonesian Folklores.</h2>
                <p>Folklore of Indonesia is known in Indonesian as dongeng 
                    (lit. "tale"), cerita rakyat (lit. "people's story") or folklor 
                    (lit. "folklore"), refer to any folklore found in Indonesia. 
                    Its origins are probably an oral culture, with a range of stories
                     of heroes associated with wayang and other forms of theatre, 
                     transmitted outside of a written culture. Folklore in Indonesia 
                     are closely connected with mythology.(Wikipedia)
                    </p>
                <p><a href="/lokal" class="tbl-biru">See More</a></p>
            </div>
        </section>

    

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Website that tell about Folklores and Fairy tales from Indonesia and Around the world</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jln. Teuku Nyak Arief Darussalam, Banda Aceh, Aceh, 2</p>
                    <p>Kode Pos: 23111</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><b>instagram: </b>@shyvaannisa</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>RumahRafif.</b> All Rights Reserved.
        </div>
    </div>
    
</body>
@endsection