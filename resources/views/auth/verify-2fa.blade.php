<form method="POST" action="{{ route('verify.2fa') }}">
    @csrf
    <label>Entrez votre code 2FA :</label>
    <input type="text" name="one_time_password" required>
    <button type="submit">Vérifier</button>
</form>
