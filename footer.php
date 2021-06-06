
<html>
<footer>
    <div class="container">
        <div class="box">
            <h3> About Us </h3>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <button > Read More </button>
        </div>
        <div class="box">
            <h3> Quick Links </h3>
            <ul>
                <li> 
                    <a href="#"> Home </a>
                </li>
                <li> 
                    <a href="#"> Services </a>
                </li>
                <li> 
                    <a href="#"> Categories </a>
                </li>
                <li> 
                    <a href="#"> Testimonials </a>
                </li>
            </ul>
        </div>
        <div class="box">
            <h3> Follow Us </h3>
            <ul>
                <li>
                    <a href="#">
                        <img src="../icons/facebook.svg" alt="">
                        <span> Facebook </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../icons/instagram.svg" alt="">
                        <span> Instagram </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../icons/twitter.svg" alt="">
                        <span> Twitter </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../icons/google.svg" alt="">
                        <span> Google </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- <div class="box gallery">
            <h3> Gallery </h3>
            <!-- <div class="navgal">
                <div>
                    <img src="./images/Plumber_at_work.jpg" alt="">
                </div>
                <div>
                    <img src="./images/personal-trainer.jpg" alt="">
                </div>
                <div>
                    <img src="./images/nurse.jpg" alt="">
                </div>
                <div>
                    <img src="./images/Engineering-jobs.jpg" alt="">
                </div>
                <div>
                    <img src="./images/drain-cleaner.jpg" alt="">
                </div>
                <div>
                    <img src="./images/house-painter.jpg" alt="">
                </div>
            </div> -->
        </div> 
    </div>
</footer>

<footer class="copyright">
    <div>
        Copyright © 2020 Sabaiko Mistiri | Developed by <a href="#"> Three Motivated Minds Pvt. Ltd. </a>
    </div>
</footer>

<style>
    /* Footer */
footer {
  background-color: #3d414a;
  padding: 4rem 0;
}
footer .container .box button {
  padding: 0.7rem 0.7rem;
  border: none;
  background: #ee9a25;
  color: #fefefe;
  border-radius: 4px;
  font-size: 0.75rem;
  cursor: pointer;
  transition: all 0.3s ease;
  outline: none;
}
footer .container .box button:hover {
  background-color: #2d333f;
}
footer .container {
  display: flex;
  color: #fefefe;
}
footer .box {
  flex: 1;
  margin-right: 2rem;
  text-align: center;
}
footer .gallery img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
footer .gallery .navgal {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
footer .gallery .navgal > div {
  width: calc(1 / 3 * 100% - (1-1 / 3) * 10px);
  margin-bottom: 10px;
}
footer .box ul {
  list-style: none;
}
footer .box ul li a {
  color: #fefefe;
  text-decoration: none;
  transition: all 0.3s ease;
}
footer .box ul li a:hover {
  color: #ee9a25;
}
footer .box h3 {
  border-bottom: 1px solid #ee9a25;
  padding-bottom: 1rem;
  margin-bottom: 1rem;
}
footer .box p {
  line-height: 1.6;
  margin-bottom: 1rem;
}
footer .box ul li {
  margin-bottom: 1rem;
}
footer .box:nth-child(3) > div {
  display: flex;
  justify-content: center;
}
footer .box:nth-child(3) {
  text-align: left;
}
footer .box:nth-child(3) h3 {
  text-align: center;
}
footer .box:nth-child(3) > div img {
  margin-right: 1rem;
}
footer .box:nth-child(3) ul li {
  margin-bottom: 1rem;
}

footer.copyright {
  background-color: #363a40;
  padding: 1rem 0;
  color: #fefefe;
  text-align: center;
}
footer.copyright a {
  color: #ee9a25;
  text-decoration: none;
}
</style>