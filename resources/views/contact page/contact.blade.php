@extends('layouts.template')

@section('layout_content')
    <!-- bootstrap untuk icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- bootstrap penutup icon -->

    <!-- panggil css file di dalam laravel -->
    <link rel="stylesheet" href="/css/contact.css">
    <!-- akhir panggil css file di dalam laravel -->

    {{-- JUMBOTRON --}}
    <section id="contact" class="jumbotron">
        <div class="d-flex flex-row p-5">
            <div class="container-fluid p-5">
                <h1 class="display-4 text-center">Contact Us</h1>
                <p class="text-center">Welcome to our Contact Us page! We're thrilled to connect with you. Whether you have a question, a suggestion, or just want to say hello, we're here for you.</p>
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-map-marker" style="font-size:48px;color:#332416"></i>
                                    <h5 class="card-title">Address</h5>
                                    <p class="card-text">Citraland, Surabaya Barat</p>
                                    <a href="#" class="btn btn-primary">See On Map</a>
                                    {{-- gmaps --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-phone" style="font-size:48px;color:#332416"></i>
                                    <h5 class="card-title">Call Us</h5>
                                    <p class="card-text">+62 (___ ____ ____)</p>
                                    <a href="#" class="btn btn-primary">Call Now</a>
                                    {{-- phone number --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-envelope" style="font-size:48px;color:#332416"></i>
                                    <h5 class="card-title">Email Us</h5>
                                    <p class="card-text">threetoruz@gmail.com</p>
                                    <a href="#" class="btn btn-primary">Send Email</a>
                                    {{-- link email --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-external-link" style="font-size:48px;color:#332416"></i>
                                    <h5 class="card-title">Socials</h5>
                                    <p class="card-text"><i class="fa fa-instagram" style="font-size:20px"></i> @threetoruz </p>
                                    <a href="#" class="btn btn-primary">Visit Our Social Media</a>
                                    {{-- taruh link tree --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- LEAVE A MESSAGE --}}
            <div class="container-fluid shadow bg-white rounded p-3 mt-5 mb-5">
                <div>
                    <h2 class="mb-4 text-center" style="color: #332416; font-family: Jacques Francois; color: #332416;">Leave us a message📝</h2>
                    <form method="POST" action="{{ route('message.store') }}" class="w-75 mx-auto ">
                        @csrf
                        <div class=" mb-3 text-left">
                            <label for="message_nama" class="form-label" style="color: #332416;">Full Name</label>
                            <input type="text" class="form-control" id ="message_nama" name="message_nama"
                                placeholder="Name" required>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="message_email" class="form-label text-left" style="color: #332416;"> Your E-mail Address</label>
                            <input type="email" class="form-control" id ="message_email" name="message_email"
                                placeholder="Email" required>
                        </div>
                        <div class="mb-3 text-left">
                            <label for="message_nomor_hp" class="form-label text-left" style="color: #332416;">Phone Number (optional)</label>
                            <input type="tel" class="form-control" id ="message_nomor_hp" name="message_nomor_hp"
                                placeholder="Phone Number">
                        </div>
                        <div class="mb-3 text-left">
                            <label for="message_pesan" class="form-label text-left" style="color: #332416;">Message</label>
                            <textarea class="form-control" id= "message_pesan" name="message_pesan" rows="3" placeholder="Message" required></textarea>
                        </div>

                        <div class="alert alert-success mt-3" id="success-message" style="display:none;">
                            Your message has been sent!
                        </div>
                        
                        <button name="button_add" type="submit" class="w-100 btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
            {{-- END OF LEAVE A MESSAGE --}}
        </div>
    </section>
    {{-- END OF JUMBOTRON - -}}

    
    {{-- --}}
    <script>
        // Fungsi untuk menampilkan pesan setelah formulir terkirim
        function showMessage() {
            document.getElementById('success-message').style.display = 'block';
        }

        // Jika pesan terkirim, panggil fungsi showMessage
        @if(session('status') == 'message-sent')
            showMessage();
        @endif
    </script>
@endsection
