<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</head>

<body>

<table>
    <thead>
    <tr>
        <th data-field="id">Id</th>
        <th data-field="name">Name</th>
        <th data-field="email">Email</th>
        <th data-field="ph_no">Phone no</th>
        <th data-field="subject">Subject</th>
        <th data-field="message">Message</th>
        <th data-field="seen">Seen/Unseen</th>
    </tr>
    </thead>
            @foreach($contact_us_details as $contact)
                <tr>
                    <td>{{ ($contact->id) }}</td>
                    <td>{{ ($contact->author) }}</td>
                    <td> {{ ($contact->email) }}</td>
                    <th> {{ $contact->phone_no }}</th>
                    <td> {{ ($contact->subject) }}</td>
                    <td> {{ $contact->comment }}</td>
                    <td> Seen button here</td>

                </tr>
            @endforeach
    <tbody>

    </tbody>
</table>
</body>

</html>



