describe('E2E Test - User Login', () => {
  it('Should successfully log in with valid credentials', () => {
    cy.visit('http://localhost/fashionconnect/frontend/login.php'); // Đảm bảo truy cập đúng trang
    cy.get('input[name="username"]').type('ngtuong');
    cy.get('input[name="password"]').type('1234');
    cy.get('input[type="submit"]').click();
    cy.url().should('include', 'http://localhost/fashionconnect/backend/admin.php');
    cy.contains('Admin Page').should('be.visible');
  });
});

  