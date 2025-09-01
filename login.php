<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="modal-body">
      <!-- Image Section -->
      <div class="modal-image">
        <img src="images/register.jpeg" alt="Login" />
      </div>

      <!-- Form Section -->
      <div class="modal-form">
        <h2>Login</h2>
        <form action="#" method="POST">
          <label for="username">Username:</label><br>
          <input type="text" id="username" name="username" required><br><br>
          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password" required><br><br>
          <button href="index.php" type="submit">Login</button>
        </form>
        <!-- Forgot Password Link -->
        <div class="forgot-password">
          <a href="/forgot-password" style="color: #ff4500; text-align: center; display: block; margin-top: 15px;">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</div>


<style>
  /* Modal Background */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    transition: opacity 0.3s ease;
  }

  /* Modal Content */
  .modal-content {
    background-color: #ff4500; /* Updated to #ff4500 */
    margin: 5% auto;
    padding: 0;
    width: 70%;
    max-width: 900px;
    border-radius: 15px;
    display: flex;
    flex-direction: row;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    transform: scale(0.9);
    transition: transform 0.3s ease-in-out;
  }

  .modal-content.show {
    transform: scale(1);
  }

  /* Close Button */
  .close {
    font-size: 28px;
    color: #fff;
    cursor: pointer;
    position: absolute;
    top: 15px;
    right: 20px;
    z-index: 2;
    padding: 5px 10px;
  }

  /* Modal Body (Image and Form Section) */
  .modal-body {
    display: flex;
    width: 100%;
  }

  /* Image Section */
  .modal-image {
    flex: 1;
    background-color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
    overflow: hidden;
  }

  .modal-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .modal-image:hover img {
    transform: scale(1.1);
  }

  /* Form Section */
  .modal-form {
    flex: 1.5;
    padding: 30px;
    background-color: black; /* Black background for the form */
    color: white; /* White text for the form */
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    box-sizing: border-box;
  }

  .modal-form h2 {
    text-align: center;
    color: #ff4500; /* Updated to #ff4500 text color */
    margin-bottom: 20px;
    font-family: 'Arial', sans-serif;
  }

  .modal-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: bold;
    color: white; /* White text for labels */
  }

  .modal-form input {
    width: 100%;
    padding: 12px;
    margin-bottom: 18px;
    background-color: #333; /* Dark background for input */
    color: white; /* White text in inputs */
    border-radius: 8px;
    font-size: 14px;
  }

  .modal-form button {
    width: 100%;
    padding: 12px;
    background-color: #ff4500; /* Updated to #ff4500 */
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .modal-form button:hover {
    background-color: #e43f00; /* Darker #ff4500 color on hover */
  }

  /* Forgot Password Link */
  .forgot-password a {
    color: #ff4500;
    text-align: center;
    display: block;
    margin-top: 15px;
    text-decoration: none;
  }

  .forgot-password a:hover {
    text-decoration: underline;
  }

  /* Transition for modal visibility */
  .modal.show {
    display: block;
    opacity: 1;
  }
  
  /* Animation for modal */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }

  /* Apply the animation when modal is opened */
  .modal.show {
    animation: fadeIn 0.4s ease;
  }
</style>
