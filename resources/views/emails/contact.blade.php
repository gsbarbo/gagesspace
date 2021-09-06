<h1>This is a test Email.</h1>

<p>{{ $form_data['name'] }}</p>
<p>{{ $form_data['email'] }}</p>
<p>{{ $form_data['message'] }}</p>

**

<p>Captcha: {{ $form_data['captcha'] }}</p>
<p>IP: {{ $from_ip }}</p>
<p>Send Time: {{ date('Y-m-d H:m:i', time()) }}</p>
