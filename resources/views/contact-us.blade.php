@extends("layouts.app")

@section('title')
    {{ $page['page_title']  }}
@endsection

@section('content')
        <section id="contact" class="contact section">
            <div class="container section-title page-top-headline" data-aos="fade-down">
                <h2>{{ $page['page_title']  }}</h2>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @include('layouts.contactuspage.main-address')
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsezero" aria-expanded="false" aria-controls="flush-collapsezero">
                            Administration
                            </button>
                          </h2>
                          <div id="flush-collapsezero" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation/Section</th>
                                        <th scope="col">Web-mail</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Faridpur Engineering College</td>
                                        <td></td>
                                        <td><a href="mailto:info@fec.ac.bd">info@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Principal, Faridpur Engineering College</td>
                                        <td>Principal</td>
                                        <td><a href="mailto:principal@fec.ac.bd">principal@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Incharge - Exam Control Room, FEC</td>
                                        <td>Incharge - Exam Control Room</td>
                                        <td><a href="mailto:exam.control@fec.ac.bd">exam.control@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Md. Rakibul Islam</td>
                                        <td>Programmer</td>
                                        <td><a href="mailto:rakibul.islam@fec.ac.bd">rakibul.islam@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">5</th>
                                        <td>Programmer, Faridpur Engineering College</td>
                                        <td>Programmer</td>
                                        <td><a href="mailto:programmer@fec.ac.bd">programmer@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">6</th>
                                        <td>Store Officer, Faridpur Engineering College</td>
                                        <td>Store Officer</td>
                                        <td><a href="mailto:storeofficer@fec.ac.bd">storeofficer@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">7</th>
                                        <td>Head Assistant, Faridpur Engineering College</td>
                                        <td>Head Assistant</td>
                                        <td><a href="mailto:headassistant@fec.ac.bd">headassistant@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">8</th>
                                        <td>Caretaker, Faridpur Engineering College</td>
                                        <td>Caretaker</td>
                                        <td><a href="mailto:caretaker@fec.ac.bd
                                        ">caretaker@fec.ac.bd</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                        Computer Science & Engineering Department
                        </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation/Section</th>
                                    <th scope="col">Web-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Head - Dept. of CSE</td>
                                    <td>Head of the Dept. of CSE</td>
                                    <td><a href="mailto:head.cse@fec.ac.bd">head.cse@fec.ac.bd</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>MD. KHALIL UDDIN</td>
                                    <td>Associate Professor (CSE)</td>
                                    <td><a href="mailto:khalil.uddin@fec.ac.bd">khalil.uddin@fec.ac.bd</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Dr. Sujit Biswas</td>
                                        <td>Associate Professor (CSE)</td>
                                        <td><a href="mailto:sujitedu@fec.ac.bd">sujitedu@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>MD. TUHIN REZA</td>
                                        <td>Lecturer (CSE)</td>
                                        <td><a href="mailto:tuhin.reza@fec.ac.bd">tuhin.reza@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">5</th>
                                        <td>Md. Rasel Ahmed</td>
                                        <td>Lecturer (CSE)</td>
                                        <td><a href="mailto:rasel.ahmed@fec.ac.bd">rasel.ahmed@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">6</th>
                                        <td>Md. Sumon Reza</td>
                                        <td>Lecturer (CSE)</td>
                                        <td><a href="mailto:suman.reza@fec.ac.bd">suman.reza@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">7</th>
                                        <td>SAMEYA AKTER</td>
                                        <td>Lecturer (CSE)</td>
                                        <td><a href="mailto:sameya.akter@fec.ac.bd">sameya.akter@fec.ac.bd</td>
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            Electrical & Electronic Engineering Department
                            </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation/Section</th>
                                        <th scope="col">Web-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Head - Dept. of EEE</td>
                                        <td>Head of the Dept. of EEE</td>
                                        <td><a href="mailto:head.eee@fec.ac.bd">head.eee@fec.ac.bd</td>
                                        </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>PARTHA MANDAL</td>
                                            <td>Lecturer (EEE</td>
                                            <td><a href="mailto:mandal.partha@fec.ac.bd">mandal.partha@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Md. Zillur Rahman</td>
                                            <td>Lecturer (EEE)</td>
                                            <td><a href="mailto:zrahman@fec.ac.bd">zrahman@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Apurbo Biswas</td>
                                            <td>Lecturer (EEE)</td>
                                            <td><a href="mailto:	abiswas@fec.ac.bd">	abiswas@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>S. M. SHIHAB HASAN</td>
                                            <td>WORKSHOP/LABORATORY IN-CHARGE</td>
                                            <td><a href="mailto:shahed.mahmud@fec.ac.bd">shihab.hasan@fec.ac.bd</td>
                                          </tr>
                                    </tbody>
                                    </table>
                            </div>
                            </div>
                        </div>

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                        Civil Engineering Department
                        </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation/Section</th>
                                    <th scope="col">Web-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Head - Dept. of Civil Engineering</td>
                                    <td>Head of the Dept. of Civil Engg.</td>
                                    <td><a href="mailto:head.ce@fec.ac.bd">head.ce@fec.ac.bd</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Dr. Engr. Md. Mizanur Rahman</td>
                                    <td>Professor (Civil Engg.)</td>
                                    <td><a href="mailto:mizanur.rahman@fec.ac.bd">mizanur.rahman@fec.ac.bd</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>RAIHAN KHAN OPU</td>
                                        <td>Assistant Professor (Civil Engg.)</td>
                                        <td><a href="mailto:rkopu@fec.ac.bd">rkopu@fec.ac.bd</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td>Md. Zillur Rahman</td>
                                        <td>Lecturer (EEE)</td>
                                        <td><a href="mailto:zrahman@fec.ac.bd">zrahman@fec.ac.bd</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td>Md. Ekhlas Uddin</td>
                                        <td>Lecturer (Civil Engg.)</td>
                                        <td><a href="mailto:	ekhlas.uddin@fec.ac.bd">ekhlas.uddin@fec.ac.bd</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">6</th>
                                        <td>SHAHED MAHMUD</td>
                                        <td>WORKSHOP/LABORATORY IN-CHARGE</td>
                                        <td><a href="mailto:shihab.hasan@fec.ac.bd">shihab.hasan@fec.ac.bd</td>
                                        </tr>
                                </tbody>
                                </table>
                        </div>
                        </div>
                    </div>

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Non-Tech Department
                            </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation/Section</th>
                                        <th scope="col">Web-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Head - Nontech</td>
                                        <td>Head of the Dept. of Non-Tech</td>
                                        <td><a href="mailto:head.nontech@fec.ac.bd">head.nontech@fec.ac.bd</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Prof. Fakir Mohammad Nurujjaman</td>
                                        <td>Professor (Economics)</td>
                                        <td><a href="mailto:fmjaman@fec.ac.bd">fmjaman@fec.ac.bd</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Abdus Satter Mia</td>
                                            <td>Associate Professor (Physics)</td>
                                            <td><a href="mailto:satter.mia@fec.ac.bd">satter.mia@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Muhammad Younus Ali</td>
                                            <td>Associate Professor (Math.)</td>
                                            <td><a href="mailto:	younus.ali@fec.ac.bd">	younus.ali@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">5</th>
                                            <td>Mohammad Arifur Rahman</td>
                                            <td>Associate Professor (Management)</td>
                                            <td><a href="mailto:m.arifur_rahman@fec.ac.bd">	m.arifur_rahman@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">6</th>
                                            <td>Md. Khalilur Rahman</td>
                                            <td>Lecturer (CSE)</td>
                                            <td><a href="mailto:	khalilur.rahman@fec.ac.bd">	khalilur.rahman@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">7</th>
                                            <td>Zannatun Naeem</td>
                                            <td>Assistant Professor (Math.)</td>
                                            <td><a href="mailto:	zannatun.naeem@fec.ac.bd">	zannatun.naeem@fec.ac.bd</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">8</th>
                                            <td>Afia Begum</td>
                                            <td>Lecturer (Physics)</td>
                                            <td><a href="mailto:	afia.begum@fec.ac.bd">	afia.begum@fec.ac.bd</td>
                                          </tr>
                                    </tbody>
                                    </table>
                            </div>
                            </div>
                        </div>


                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Library Section
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                      <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation/Section</th>
                                        <th scope="col">Web-mail</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Library,Faridpur Engineering College</td>
                                        <td>Library</td>
                                        <td><a href="mailto:library@fec.ac.bd">library@fec.ac.bd</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>MD. RAFIQUL ISLAM</td>
                                        <td>Librarian</td>
                                        <td><a href="mailto:rafiqul.islam@fec.ac.bd">rafiqul.islam@fec.ac.bd</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Registrar Section
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body"> <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation/Section</th>
                                    <th scope="col">Web-mail</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Registrar,Faridpur Engineering College</td>
                                    <td>Registrar</td>
                                    <td><a href="mailto:registrar@fec.ac.bd">registrar@fec.ac.bd</td>
                                  </tr>
                                </tbody>
                              </table></div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Accounts Section
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body">  <table class="table table-striped table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Designation/Section</th>
                                    <th scope="col">Web-mail</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Accountant,Faridpur Engineering College</td>
                                    <td>Accountant</td>
                                    <td><a href="mailto:accountant@fec.ac.bd">accountant@fec.ac.bd</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Cashier, Faridpur Engineering College</td>
                                    <td>Cashier</td>
                                    <td><a href="mailto:cashier@fec.ac.bd">cashier@fec.ac.bd</td>
                                  </tr>
                                </tbody>
                              </table></div>

                          </div>
                        </div>
                      </div>
                </div>

                <div class="row gy-4 mt-1">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7312.402406850009!2d89.854812!3d23.597116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe2535f9df3a73%3A0x820055c30208a76c!2z4Kar4Kaw4Ka_4Kam4Kaq4KeB4KawIOCmh-CmnuCnjeCmnOCmv-CmqOCmv-Cmr-CmvOCmvuCmsOCmv-CmgiDgppXgprLgp4fgppw!5e0!3m2!1sbn!2sbd!4v1720968348137!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when+-downgrade"></iframe>
                    </div><!-- End Google Maps -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
@endsection
