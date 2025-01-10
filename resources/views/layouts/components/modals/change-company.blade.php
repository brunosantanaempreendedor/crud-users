<!-- Modal -->
<div class="modal fade" id="changeCompany" tabindex="-1" aria-labelledby="changeCompanyLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeCompanyLabel">Escolha uma Empresa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="companyForm">
            <div class="mb-3">
              <label for="companySelect" class="form-label">Empresa</label>
              <select class="form-select" id="companySelect" name="company">
                <!-- Opções serão populadas via JavaScript ou backend -->
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
