@extends('layouts.template')

@section('layout_content')
    <!-- bootstrap untuk icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- bootstrap penutup icon -->

    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/contact.css">
    <!-- akhir panggil css file di dalam laravel -->

    {{-- JUMBOTRON --}}
    <div class="jumbotron d-flex flex-row p-5">
        <div class="container text-center p-5">
            <h1 class="display-4">Contact Us</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>

        </div>
        <div class="container  p-5">

            <div >
                <h2 class="mb-5 mt-5 text-center">Leave us a message</h2>
                <form method="POST" action="{{route ('message.store')}}" class="w-75 mx-auto ">
                    @csrf 
                    <div class="mb-3 text-left">
                        <label for="message_nama" class="form-label ">Full Name</label>
                        <input type="text" class="form-control" id ="message_nama" name="message_nama" placeholder="Name" required>
                    </div>
                    <div class="mb-3 text-left">
                        <label for="message_email" class="form-label text-left">Your E-mail Address</label>
                        <input type="email" class="form-control" id ="message_email" name="message_email"
                            placeholder="Email" required>
                    </div>
                    <div class="mb-3 text-left">
                        <label for="message_nomor_hp" class="form-label text-left">Phone Number (optional)</label>
                        <input type="tel" class="form-control" id ="message_nomor_hp" name="message_nomor_hp" placeholder="Phone Number">
                    </div>
                    <div class="mb-3 text-left">
                        <label for="message_pesan" class="form-label text-left">Message</label>
                        <textarea class="form-control" id= "message_pesan" name="message_pesan" rows="3" placeholder="Message" required></textarea>
                    </div>

                    <button name="button_add" type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    {{-- END OF JUMBOTRON --}}



    {{-- LEAVE A MESSAGE --}}

    {{-- END OF LEAVE A MESSAGE --}}
@endsection
