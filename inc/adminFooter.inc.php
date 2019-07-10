 <!-- Sticky Footer -->
<footer class="sticky-footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span class="footer">Copyright © Valérie Lemaitre - Portfolio 2019</span>
        </div>
    </div>
</footer>
</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Etes-vous sûr de vouloir vous déconnecter ?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
            </div>
        <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.
        </div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                  <?php if(userConnect()) : ?>
                      <a class="btn btn-primary" href="<?= URL ?>connexion.php?action=deconnexion">Déconnexion</a>
                  <?php endif; ?>
          </div> <!-- fin modal-footer -->
        </div> <!-- fin modal-content -->
    </div> <!-- fin modal-dialog -->
</div> <!-- Fin modal fade -->

<!-- Bootstrap core JavaScript-->
<script src="../../public/vendor/jquery/jquery.min.js"></script>
<script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../public/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="../../public/vendor/chart.js/Chart.min.js"></script>
<script src="../../public/vendor/datatables/jquery.dataTables.js"></script>
<script src="../../public/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../public/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="../../public/js/demo/datatables-demo.js"></script>
<script src="../../public/js/demo/chart-area-demo.js"></script>

</body>
</html>
