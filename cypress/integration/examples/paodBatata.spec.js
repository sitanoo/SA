


describe('Testa CRUD para Produto', function() {
        it('Verifica validações', function() {
            cy.visit('/produto/create');
            cy.get("#proNom").type("teste");
            cy.get("#adicionar").click({force: true});
        });
})
