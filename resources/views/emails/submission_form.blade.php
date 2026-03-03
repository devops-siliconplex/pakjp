<strong>You have received the following from the web based upload form:</strong>\r\n
<html>
<body>
    <table border='1' height='100%' width='95%' bgcolor='#CCCCCC'>
        <tr>
            <td>Submission Type</td>
            <td>{{ $data['submission_type'] }}</td>
        </tr>					
        <tr>
            <td>Title of the MS</td>
            <td>{{ $data['title_ms'] }}</td>
        </tr>
        <tr>
            <td>Name of all authors</td>
            <td>{{ $data['all_authors'] }}</td>
        </tr>
        {{-- <tr>
            <td>E-mail Address</td>
            <td>{{ $email }}</td>
        </tr> --}}
    </table>
</body>
</html>