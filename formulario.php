<form action="contact.php" method="post">
  <div class="elem-group">
    <label for="name">Nombre</label>
    <input type="text" id="name" name="visitor_name" placeholder="Nombre del destinatario" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="Correo electrónico" required>
  </div>
  <div class="elem-group">
    <label for="message">Mensaje</label>
    <textarea id="message" name="visitor_message" required></textarea>
  </div>
  <button type="submit">Enviar Mensaje</button>
</form>