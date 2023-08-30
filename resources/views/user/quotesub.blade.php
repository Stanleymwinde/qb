<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
    <p>Here are the details of the submission:</p>
    <ul>
        <li>Name: {{ $quote['name'] }}</li>
        <li>Email: {{ $quote['email'] }}</li>
        <li>Phone: {{ $quote['phone'] }}</li>
        <li>Service {{ $quote['service'] }}</li>
        <li>Contact Mode {{ $quote['contactmode'] }}</li>
        <li>Additional Document: <a href="{{ asset('storage/' . $quote['file_path']) }}">{{ $quote['file_name'] }}</a>
        </li>
        <li>Message: {{ $quote['message'] }}</li>
    </ul>
</div>
