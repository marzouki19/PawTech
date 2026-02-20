import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
  static targets = ['table', 'form'];

  showForm() {
    this.tableTarget.classList.add('hidden');
    this.formTarget.classList.remove('hidden');
  }

  showTable() {
    this.formTarget.classList.add('hidden');
    this.tableTarget.classList.remove('hidden');
  }
}
