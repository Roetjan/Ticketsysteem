<form action="{{ route('createTicket') }}" method="POST" name="ticketform">
    @csrf
    <label for="owner">Owner: </label>
    <input type="text" id="owner" name="owner"><br>

    <label for="qr">QR: </label>
    <input type="text" name="qr" id="qr"><br>

    <label for="event">Event: </label>
    <input type="text" name="event" id="event"><br>

    <label for="description">Description: </label>
    <input type="text" name="desc" id="desc"><br>

    <button type="submit">Opslaan</button>
</form>