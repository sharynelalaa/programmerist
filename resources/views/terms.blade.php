<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>G'Five Rentals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css"
        integrity="sha512-b42SanD3pNHoihKwgABd18JUZ2g9j423/frxIP5/gtYgfBz/0nDHGdY/3hi+3JwhSckM3JLklQ/T6tJmV7mZEw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="{{ asset('css/terms.css') }}" rel="stylesheet">

   
</head>

<body>

    <body>
        <div class="container-fluid" id="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <img src="{{ asset('./images/G5-Logo-B-White-on-Black-Border-V1.png') }}" alt="Logo" width="200" height="100"
                            class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="carmodel.html">Vehicles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutus.html">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.html">Contact Us</a>
                            </li>
                        </ul>
                        <form class="d-flex mx-auto">
                            <button type="button" class="btn1 btn-outline-warning btn-lg" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Login
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Members can access
                                                discounts,
                                                points and special features.</h1>
                                            <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body px-5">
                                            <form>
                                                <div class="mb-3 w-100">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Email">
                                                </div>
                                                <div class="mb-3 w-100">
                                                    <input type="password" class="form-control my-3"
                                                        id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                        checked>
                                                    <label class="form-check-label" for="exampleCheck1">Keep me
                                                        signed in</label>
                                                </div>
                                                <p class="w-100">Selecting this checkbox will keep you signed into
                                                    your account on this device until
                                                    you
                                                    sign out. Do not select this on shared devices.</p>
                                                <button type="submit" class="btn btn-dark w-75 mx-5">Sign
                                                    in</button>
                                                <div class="col-9 mx-auto">
                                                    <p class="text-center"><a href="#" class="text-decoration-none"
                                                            style="color: blue;">Forgot password?</a></p>
                                                </div>
                                                <p>Don't have an account? <a href="signup.html" class="text-decoration-none"
                                                        style="color: blue;">Create one.</a></p>
                                                <p>or continue with</p>
                                                <div class="row mx-5">
                                                    <div type="button" href="#" class="icon facebook col-1">
                                                        <span><i class="bi bi-facebook"></i></span>
                                                    </div>
                                                    <div type="button" href="#" class="icon instagram col-2">
                                                        <span><i class="bi bi-instagram"></i></span>
                                                    </div>
                                                    <div type="button" href="#" class="icon twitter col-3">
                                                        <span><i class="bi bi-twitter"></i></span>
                                                    </div>
                                                    <div type="button" href="#" class="icon youtube col-3">
                                                        <span><i class="bi bi-youtube"></i></span>
                                                    </div>
                                                    <div type="button" href="#" class="icon google col-4">
                                                        <span><i class="bi bi-google"></i></span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <h5><a href="underconstruction.html"
                                                    class="text-decoration-none justify-left">Feedback</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="header">
                <div>
                    <h1>TERMS AND CONDITIONS</h1>
                </div>
            </div>
            <div class="article">
                <div>
                    <br />
                    <h6>FOR CAR RENTAL SERVICE WITH DRIVER</h6>
                    <p>1. All charges must be paid in full before the hiring commences, unless stated otherwise. Any extra
                        costs
                        must be settled at the end of the hire.</p>
                    <p>2. Only drivers of OWNER are authorized to drive the rental vehicle. Under no circumstances will any
                        other
                        person be allowed to drive the rental vehicle.</p>
                    <p>3. The Driver will drive at reasonable speeds keeping within the law and will use his/her judgment in
                        relation to the prevailing road type and conditions.</p>
                    <p>4. The Driver will travel by the most appropriate route on the day, unless otherwise instructed by
                        CLIENT.
                    </p>
                    <p>5. OWNER accepts no responsibility nor can it be held liable in any way whatsoever for any delays,
                        however
                        caused.</p>
                    <p>6. OWNER operates a NO SMOKING policy within all their vehicles. Should this condition be ignored the
                        DRIVER
                        is authorized to terminate this agreement without liability to the OWNER and all payments made shall
                        be
                        forfeited in favor of the OWNER.</p>
                    <p>7. In the event of mechanical failure, OWNER reserves the right to substitute an alternative
                        vehicle/vehicles. The OWNER reserves to change the rental vehicle and the driver at any time, should
                        it
                        become necessary as determined by the OWNER.</p>
                    <p>8. OWNER shall not be responsible or liable for any loss or damage to the client’s and/or passenger’s
                        and/or
                        any third party’s property however caused.</p>
                    <p>9. Owner’s car is equipped with comprehensive insurance and the renter may ask to see the insurance
                        policy
                        before trip starts. In case of an accident with bodily injuries or death, the passenger may claim
                        directly
                        with the insurer. If the claims arose from the fault or negligence of the driver, and OWNER is held
                        solidarily liable with the driver, Client hereby agrees that OWNER can only be liable to advance
                        only
                        the
                        amount equivalent to the insurance proceeds, but in no case shall the same be more than Php50,000.00
                        per
                        passenger.</p>
                    <p>10. The DRIVER reserves the right to refuse carriage of luggage if, in his judgment, the volume of
                        weight
                        is
                        excessive.</p>
                    <p>11. The OWNER and/or the DRIVER have the right to refuse to carry any passenger who he believes to be
                        under
                        the influence of alcohol or drugs and whose behavior poses a threat either to the DRIVER, the
                        vehicle or
                        any
                        passenger.</p>
                    <p>12. The CLIENT shall not use the rental vehicle to transport any illegal substance or article. This
                        agreement
                        shall terminate immediately and all payments made shall be forfeited if the CLIENT contravenes this
                        condition. CLIENT shall also hold the OWNER and the</p>
                    <p>DRIVER free and harmless and indemnify them for any
                        claims or liabilities due to the violation by the CLIENT of this provision.</p>
                    <p>13. The CLIENT shall be held responsible for the conduct of all passengers in the rental vehicle at
                        all
                        times.</p>
                    <p>14. The CLIENT shall be responsible for any damage caused to the interior of the rental vehicle and
                        will
                        be
                        billed accordingly for any repair or charges required in order to reinstate the rental vehicle to
                        its
                        condition prior to the damage, ordinary wear and tear excepted. This applies only for damages caused
                        by
                        the
                        client.</p>
                    <p>15. The Overtime will start a minute after the agreed time. Extension for one (1) minute from the end
                        of
                        the
                        rental will be charged one (1) hour already and so on and so forth.</p>
                    <p>16. OWNER may provide subcontracted vehicles.</p>
                    <p>17. Fuel level should be returned to the same fuel level as the driver left the OWNER’s garage. For
                        nine
                        (9)
                        hours with driver and for overnight trips, this will be and should be shouldered by the renter. For
                        pick
                        up
                        drop off trips, this is already included in the rate and will be shouldered by the OWNER.</p>
                    <p>18. For cases that the pick up or drop off location will be within Metro Manila, your time will start
                        on
                        the
                        pick up and drop off location. However, if its outside metro manila, the time will start the moment
                        the
                        driver leaves our garage and the time will end upon the arrival of the driver here in the garage.
                        Any
                        overtime of the driver will be charged to the Renter. Rest assured that our drivers are trained to
                        take
                        the
                        fastest route going back to our garage.</p>
                    <p>19. By supplying the email address, CLIENT hereby authorizes OWNER to send notices, letters, demands
                        and
                        other correspondences by email.</p>
                    <p>20. Entire Agreement. This Car Rental Agreement constitutes the entire agreement between the Parties
                        with
                        respect to this car service arrangement. No modification to this agreement can be made unless in
                        writing
                        signed by both parties. Any notice required to be given to the other party will be made to the
                        contact
                        information below.</p>
                    <p>21. If the fuel is not at the full tank level or it is less than the level when it was turned over,
                        renter
                        shall pay the estimated cost declared by the Owner’s Dispatcher.</p>
                    <h6>SELF DRIVE SERVICE</h6>
                    <p>1. Rental Term. The term of this Car Rental Agreement runs from the dateand time of vehicle pickup as
                        indicated in the Basic Terms until the return of the vehicle to Owner, and completion of all terms
                        of
                        this
                        Car Rental Agreement by both Parties.</p>
                    <p>The Parties may shorten or extend Rental Term upon mutual agreement of both Parties. The Renter may
                        extend
                        Rental Term but he must inform the Owner atleast 24 hours prior to the end of Rental Term,
                        otherwise,
                        such
                        request will not be entertained.</p>
                    <p>Persons Who May Drive the Rental Vehicle. The Rental Vehicle may be driven during the term of Rental
                        Term
                        only by the person named in this Agreement and only if said person holds a current full valid
                        driver's
                        license appropriate for the Rental Vehicle in the Philippines.</p>
                    <p>2. Scope of Use. Renter will use the Rental Vehicle only for personal or routine business use, and
                        operate
                        the
                        Rental Vehicle only on properly maintained roads and parking lots. Renter will comply with all
                        applicable
                        laws relating to holding of licensure to operate the vehicle, and pertaining to operation of motor
                        vehicles.
                        Renter will not sublease the Rental Vehicle or use it as a vehicle for hire. Renter will not take
                        the
                        vehicle outside the destination stated in the Basic Terms. The renter shall not operate the vehicle
                        or
                        allow
                        it to be operated for the transport of more passengers or goods than the maximum specified in the
                        certificate of loading and/or road user charge certificate, whichever is the lesser, for the Rental
                        Vehicle.
                    </p>
                    <p>3. Security deposit - Renter will be required to provide a security deposit to owner in the amount
                        stated
                        in
                        the Basic Terms to be used in the event of loss or damage to the Rental Vehicle during the term of
                        this
                        Car
                        Rental Agreement or for any claims which the Owner may have against the Renter upon the termination
                        of
                        this
                        Agreement. In the event of damage to the Rental Vehicle or any other claims, Owner will apply this
                        Security
                        Deposit to defray the costs of necessary repairs or replacements and claims. If the cost for repair
                        or
                        replacement of damage to the Rental Vehicle or any other claims exceed the amount of the Security
                        Deposit,
                        Renter will be responsible for the complete payment to the Owner of the balance of this cost.</p>
                    <p>4. Identification of the Renter. Renter is hereby required to leave his Original Passport (if none,
                        any
                        Primary ID), clear photocopy of atleast 2 more IDs and 1 Latest Billing all with the same and
                        current
                        home
                        address. These documents shall be given upon pick up of Rental Vehicle from the Owner. These
                        documents
                        shall
                        be secured and safekeep by the owner andthe original ID shall be given back in the same condition to
                        the
                        Renter upon the return of Rental Vehicle to the Owner.
                    <ul>
                        <li>Primary IDs Accepted: Passport, UMID, SSS ID, Postal ID, Voter's ID, Driver’s License, TIN ID
                        </li>
                        <li>Secondary IDs Accepted: Pag-Ibig Loyalty Card, Philhealth ID, Company ID</li>
                        <li>Billings Accepted: Electric bill, Mobile Phone bill, Water bill, Cable Bill, Internet Bill</li>
                    </ul>
                    </p>
                    <p>5. Termination of Contract. Renter may not pre-terminate this Agreement. If pre-termination is
                        insisted by
                        renter, renter will still be liable to pay for the entire contract price including the unused rental
                        covering the remaining unused term.</p>
                    <p>6. Insurance. In case of an accident, the full responsibility should be on the renter, including
                        damages
                        to
                        the car and bodily injury or death to him, other passengers and third parties. Renter, however, has
                        an
                        option of limiting the payment only for the rented car as follows:</p>
                    <p>(1) An additional Payment of Php100.00/day on top of the rental fee will limit the participation fee
                        of
                        the
                        Renter, only in case of damage to GFR car, to Php10,000.00; and</p>
                    <p>(2) An additional payment of Php150.00/day on top of the rental fee will relieve the renter from
                        payment
                        of
                        any participation fees onlyin case of damage to GFR car as this will be considered as full coverage.
                        This
                        limitation on payment and participation fees apply only to damages caused to the Rental Vehicle and
                        does
                        not
                        cover damage, injury and death to the renter, passengers or third parties. For avoidance of doubt,
                        despite
                        the additional payment for participation fees, renter shall still be fully liable for any damage,
                        injury
                        and/or death caused to third parties.</p>
                    <p>Further, one day trip is exactly equivalent to 24hours insurance coverage and in excess of 24 hours
                        renter
                        will be charged for additional full day rate based on the above conditions.</p>
                    <p>For avoidance of doubt, however, this limit on participation fee shall apply only after the Renter
                        has
                        provided the necessary information and reports for the application of insurance coverage.</p>
                    <p>In case of failure to secure the necessary information for the application of the insurance coverage
                        and
                        no
                        coverage is granted by the Insurer, Renter shall be liable for the total costs of repair,
                        replacements
                        and
                        other charges.</p>
                    <p>7. Responsibilities of the Renter. Every 5,000km renter shall bring the Rental Vehicle to the GFR
                        Corporation
                        garage for proper maintenance and check up. Failure to do so, damage as a result shall be charge to
                        the
                        renter, including the total cost of repairs, replacements and other related changes.</p>
                    <p>If the Renter loses the Rental Vehicle key, the Renter will be charged for the replacement key. This
                        is
                        Php
                        1,000 plus any associated transport cost.</p>
                    <p>This rental agreement does not include car replacement on number coding day. It is the Renter’s
                        responsibility not to drive the Rental Vehicle during coding day; nevertheless, replacement of
                        Rental
                        Vehicleduring coding day maybe requested but for a fee.</p>
                    <p>The Renter hereby agree not to allow travel to areas where roads are not passable for vehicles (e.g.
                        rough
                        roads, mountains, etc.) as this may cause damage to the Rental Vehicle’s tires which will be the
                        Renter’s
                        liability.</p>
                    <p>The Renter also agrees that the owner do not allow vehicle to be taken on inter island trips as well
                        as
                        the
                        vehicle to be used during natural calamities (e.g. excessively heavy rains, storms or flooding)</p>
                    <p>Rental Vehicle are non-smoking. A Php 5,000 cleaning fee will be assessed for vehicles returned with
                        evidence
                        of smoking.</p>
                    <p>Owner allows pets to ride in Rental Vehicle provided that they are properly contained in a travel
                        kennel,
                        container or cage at all times. For the health and comfort of subsequent renters of the Rental
                        Vehicle
                        who
                        may be allergic to animal dander, the Rental Vehicle must be returned in its original condition with
                        no
                        animal hair or feathers anywhere in or on the Rental Vehicle. Renters whose Rental Vehicle require a
                        detailed cleaning to remove animal hair or address sanitary issues will be assessed a Php 1,000 fee.
                    </p>
                    <p>8. Indemnification. Renter agrees to indemnify, defend, and hold harmless the Owner for any loss,
                        damage,
                        claims or legal action against Owner as a result of Renter’s operation or use of the Rental Vehicle
                        during
                        the term of this Car Rental Agreement. This includes any attorney fees necessarily incurred for
                        these
                        purposes. Renter will also pay for any parking tickets, moving violations, or other citations
                        received
                        while
                        in possession of the Rental Vehicle.</p>
                    <p>9. Representation and Warranties. Owner presents and warrants to Owner’s knowledge, the Rental
                        Vehicle
                        is
                        in
                        good condition and is safe for ordinary operation of the vehicle. Renter represents and warrants
                        that
                        Renter
                        is legally entitled to operate a motor vehicle under the Republic of the Philippines and will not
                        operate it
                        in violation of any laws, or in any negligent or illegal manner.Renter has been given an opportunity
                        to
                        examine the Rental Vehicle in advance of taking possession of it, and upon such inspection, no
                        damage is
                        found and Renter finds the said Rental Vehicle in good condition and satisfactory for the use for
                        which
                        it
                        was intended.</p>
                    <p>10. Flat Tires/Toll Fees/Parking Fees/Fuel/Cleanliness. Expenses for flat tires, toll fees, parking
                        fees,
                        fuel
                        and cleaning are to be assumed by the Renter. The Renter must also return the Rental Vehicle with
                        the
                        same
                        amount of fuel and condition (including interior and exterior) as it was delivered. The Renter will
                        ensure
                        that only premium fuel is loaded into the vehicle. Damage as a result of negligence in this regard
                        will
                        be
                        charged to the Renter.</p>
                    <p>In case the renter will mistakenly fill the fuel tank with different type of fuel, as mentioned in
                        the
                        Fuel
                        Type section on Page 1, the renter will have to pay the FULL expense for repairing the car due to
                        such
                        damage. For avoidance of doubt, despite the additional payment for insurance, renter shall still be
                        fully
                        liable for the damage that will occur.</p>
                    <p>11. Excess Wear and Tear. Normal wear and tear is anticipated during theterm of this agreement,
                        however,
                        Renter will pay the estimated cost for all the damages to the vehicle that is not normal wear and
                        tear.
                    </p>
                    <p>12. Repairs, Maintenance and Rescue. The rented vehicle should have all service and repair work
                        performed
                        at
                        GFR Corporation or Owner’s car shop only.</p>
                    <p>In cases of any accidents or breakdowns, GFR Corporation provides road side assistance and emergency
                        rescues.
                        However, Metro Manila rescues will be given 24 hours maximum to resolve. Outside of Metro Manila
                        will
                        require the company at the most of 48 hours to resolve. In severe cases, GFR Corporation will decide
                        to
                        provide a replacement car to the client.</p>
                    <p>The GFR Corporation reserves the rights to approve of any purchases for any car parts needs of the
                        client
                        which will be vital for the repair of the unit. Once approved by the management, any official
                        receipts
                        should be under the name G'Five Rentals (G.F.R.) Corporation and will be up for reimbursement.
                    </p>
                    <p>13. Entire Agreement. This Car Rental Agreement constitutes the entire agreement between the Parties
                        with
                        respect to this rental arrangement. No modification to this agreement can be made unless in writing
                        signed
                        by both parties. Any notice required to be given to the other party will be made to the contact
                        information
                        below.</p>
                    <h6>Booking Policy:</h6>
                    <p>1) For confirmed booking, 50% down payment should be done 3 days after the date of reservation,
                        failure
                        to
                        complete the payment of 50% of the rental fee will automatically cancel the reservation.</p>
                    <p>2) Renter can get full refund for the booking fee if cancellation notice was provided 24hrs prior to
                        the
                        booking schedule. However, cancellation notice given less than 24 hours prior to your booking
                        schedule
                        will
                        not be granted any refunds.</p>
                    <p>3) Remaining balance payable upon start of the trip.</p>
                    <p>• Refund Policy</p>
                    <p>• Payment may be refunded upon presentation of the original validated bank deposit or official
                        receipt
                        and a
                        valid ID. This policy must be strictly followed and can only be done at GFR office only. We will not
                        deposit
                        refunds.</p>
                    <p>Payments:</p>
                    <p>Paypal</p>
                    <p>Paypal Account Name: G.F.R. (G'Five Rentals Corp)</p>
                    <p>PaypalEmail: gfive@gfiverentals.com</p>
                    <p>Link: https://www.paypal.me/gfiverentals</p>
                    <p>*For Credit/Debit Card Payment please click on the link <a href="https://www.paypal.com/ph/home"
                            class="text-decoration-none">GFR Paypal</a>
                    </p>
                    <p>Pay Pal Payment and credit card – we will apply 5% service charge.</p>
                    <p>Bank Transfer</p>
                    <p>*Bank: BDO</p>
                    <p>• Deposit payment at Banco de Oro, Savings
                    <ul>
                        <li>Account Name: G'Five Rentals (G.F.R.) Corporation</li>
                        <li>Account Number: 001434456564</li>
                    </ul>
                    </p>
                    <p>• Branch: Kodego</p>
                </div>
            </div>
         

            <img class="terms" src="{{ asset('./images/ccc.jpg') }}" alt="" >
            
    
    
    
        
            
    
        </div>
    
    <!-- =================================================== Footer Start =============================================================== -->
    <footer class="footer" id="foorear">
        <div class="container">
            <footer class="py-5">
                <div class="row">
    
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Rental Car Types</h5>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/carmodel')}}">Vehicles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/terms')}}">Terms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/aboutus') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contactus') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    
    
    
                    <div class="col-md-5 offset-md-1 mb-3" style="margin-left: 33%;">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>
                                Monthly digest of what's new and exciting
                                from us.
                            </p> 
                                <br />
                            <div class="wrapper">
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-facebook-f"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #4400ff">Facebook</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-instagram"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #833AB4">Instagram</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon"><i class="fa fa-twitter"
                                            style=" font-size:40px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #1DA1F2">Twitter</span>
                                </a>
                                <a class="button" href="#foorer">
                                    <div class="icon"><i class="fa fa-youtube-play"
                                            style=" font-size:34px;color:rgb(255, 255, 255)"></i></div>
                                    <span style="color: #fc0303">YouTube</span>
                                </a>
                                <a class="button" href="#foorear">
                                    <div class="icon">
                                        <i class="fa fa-google" style="font-size:40px;color:rgb(255, 255, 255)"></i>
                                    </div>
                                    <span style="color: #176af0">Google</span>
                                </a>
                            </div>
    
                        </form>
    
                    </div>
                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                        <p>© 2022 G' Five | Company, Inc. All rights reserved.</p>
                        <ul class="list-unstyled d-flex">
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#twitter"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#instagram"></use>
                                    </svg></a></li>
                            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                        <use xlink:href="#facebook"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
    
    
            </footer>
        </div>
    </footer>
    <!-- =================================================== Footer End =============================================================== -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script>
        window.onscroll = function () {
            var header = document.getElementById("header");
            if (window.pageYOffset > 0) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };
    </script>
    
   

</body>

</html>