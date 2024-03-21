@extends('invitation.template')
@section('main')

   <div class="container text-center">
       <h1>Selamat Wedding Invitation Webmu Berhasil Dibuat</h1>
       @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
       <img src="https://media.istockphoto.com/id/1167132635/vector/wedding-invitation-with-flowers-peony-and-leaves-watercolor-isolated-on-white.jpg?s=612x612&w=0&k=20&c=_S2rSkpLJOKwILtPDBf-NiU9WFJ3ebyugXPuZibk63Q=" class="img-fluid my-5" alt="wedding-icon">
        <form id="wedding-icon">
          <div class="mb-3">
            <label for="link" class="form-label">Click copy link undangan anda disini. Dan share ke teman teman anda</label>
            <input class="form-control text-center" type="text" value="https://akad.in/invitation-wedding/{{$wedding->id}}/namatamu" id="myInput">
          </div>
          <button class="btn btn-secondary mb-2" onclick="myFunction()">Copy Link Undangan</button>
        </form>
        <form id="wedding-icon">
          <div class="mb-3">
            <label for="link" class="form-label">Cek Ucapan disini</label>
            <input class="form-control text-center" type="text" value="https://akad.in/list-guest-wedding/{{$wedding->id}}" id="myConfrimation">
          </div>
          <button class="btn btn-secondary mb-2" onclick="myFunction1()">Copy Link Ucapan</button>
        </form>
        <form id="wedding-icon">
            <div class="mb-3">
              <label for="link" class="form-label">Cek Ucapan disini</label>
              <input class="form-control text-center" type="text" value="https://akad.in/user/wedding/edit/{{$wedding->id}}/{{$wedding->nicknameMale}}/{{$wedding->nicknameFemale}}" id="myEdit">
            </div>
            <button class="btn btn-secondary mb-2" onclick="myFunction2()">Copy Link Edit</button>
          </form>
        
        <script>
            function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
            }
            function myFunction1() {
            // Get the text field
            var copyText = document.getElementById("myConfrimation");
            
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
            }
            function myFunction2() {
            // Get the text field
            var copyText = document.getElementById("myEdit");

             // Select the text field
             copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
            }

        </script>
   </div>
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
        
        function setMymargin() {
            const output = document.querySelector(".output");
            output.innerHTML = `scrollTop: ${window.scrollY} <br>
                                scrollLeft: ${window.scrollX} <br>
                                `;
        }

        // document ready,scroll,ets
        $(document).ready(function() {
            // $("#disc").click(function() {
            //     var style = checkMarginLeft();
            //     if (style.marginLeft.toString() == "110px") {
            //         playAudio();
            //     } else {
            //         stopAudio();
            //     }
            // });
        });

        $(document).scroll(function() {

            // setMymargin();
            var y = window.scrollY;
            if (y <= 10) {
                $("#wedding-icon").slideDown(1000);
            }
            else if (y <= 700) {
                $("#penting").fadeIn(10000);
            } 
            else if (y <= 1300) {
                $("#syarat").slideDown(10000);
            } 
            else if (y <= 2100) {
                $("#urus").fadeIn(10000);
            } 
            else if (y <= 3000) {
                $("#biaya").slideDown(10000);
            }
            
        });
    </script>
@endsection