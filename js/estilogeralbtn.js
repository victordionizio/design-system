function copyCode(button) {
            const codeContentElement = button.closest('.code-container').querySelector('.code-content');
            const textArea = document.createElement('textarea');

            const lines = Array.from(codeContentElement.querySelectorAll('.code-line'))
                .map(lineSpan => lineSpan.innerText.trim());
            textArea.value = lines.join('\n');

            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);

            const originalIcon = button.innerHTML;
            button.innerHTML = '<i class="fas fa-check"></i>';
            setTimeout(() => {
                button.innerHTML = originalIcon;
            }, 2000);
        }

        document.getElementById('fileInput').addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const fileName = this.files[0].name;
                console.log('Arquivo selecionado:', fileName);
                // Aqui você pode adicionar lógica para fazer upload ou processar o arquivo
                alert('Arquivo selecionado: ' + fileName);
            }
        });
