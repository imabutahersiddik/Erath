       // List of words to check for
        const forbiddenWords = [
            'nude-picture-of-jeinna',
            'sexy-bikini-model',
            'private-nude-photos',
            'intimate-moments',
            'sensual-photoshoot',
            'adult-video-collection',
            'romantic-encounter',
            'intimate-session',
            'couple-in-bed',
            'naughty-pictures',
            'xvideos-best-scenes',
            'pornhub-top-rated-videos',
            'xvideos-naughty-girls',
            'pornhub-favorites-2023',
            'xvideos-private-show',
            'pornhub-exclusive-content',
            'xvideos-mature-ladies',
            'pornhub-xxx-collection',
            'xvideos-anal-fun',
            'pornhub-epic-fail',
            'nude-beach-vacation-2024',
            'couples-getaway-video',
            'private-party-highlights',
            'sensual-dance-performance',
            'adult-themed-photoshoot',
            'intimate-dinner-date',
            'bachelorette-party-fun',
            'romantic-getaway-photos',
            'private-video-memories',
            'sexy-dress-photoshoot',
            'xvideos',
            'pornhub',
            'redtube',
            'youjizz',
            'xhamster',
            'spankwire',
            'hentaihaven',
            'xvideos-collection',
            'xhamster-private-show',
            'spankwire-bikini-photos',
            'hentaihaven-animated-nudes',
            'spankwire-epic-fail',
            'hentaihaven-collection',
            'adult-content',
            'xxx-videos',
            'adult-movie-collection',
            // Common words for nude files
            'sex',
            'sex video',
            'sex videos',
            'sex clip',
            'sex clips',
            'nude',
            'naked',
            'topless',
            'lingerie',
            'sensual',
            'erotic',
            'adult',
            'xxx',
            'porn',
            'sexy',
            'strip',
            'striptease',
            'intimate',
            'voyeur',
            'fetish',
            'bdsm',
            'amateur',
            'playboy',
            'adult-photos',
            'nude-art',
            'nude-photoshoot',
            'nude-collection',
            'nude-video',
            'nude-scenes',
            'nude-model',
            'nude-gallery',
            'nude-archive',
            'adultery'
        ];

                // Get forbiddenWords element
        const forbiddenWords = document.getElementById("forbiddenWords");
        const messageDiv = document.getElementById("message");
        const closeButton = document.querySelector(".forbiddenWordsclose");
        const fileUpload = document.getElementById("fileInputTXT");

        // Attach event listener to the submit button
        document.getElementById("encryptTXTBtn").addEventListener('click', function(event) {
            const file = fileUpload.files[0]; // Get the first file from the input

            if (file) {
                // Check if the file name contains forbidden words
                const containsForbiddenWord = forbiddenWordsList.some(word => 
                    file.name.toLowerCase().includes(word)
                );

                if (containsForbiddenWord) {
                    messageDiv.textContent = 'Error: Connection refused, forbidden word detected in file name.';
                    forbiddenWords.style.display = "block"; // Show the forbiddenWords
                    event.preventDefault(); // Prevent form submission
                } else {
                    messageDiv.textContent = ''; // Clear any previous messages
                }
            } else {
                messageDiv.textContent = 'Error: No file selected.';
                forbiddenWords.style.display = "block"; // Show the forbiddenWords
                event.preventDefault(); // Prevent form submission
            }
        });

        // Close the forbiddenWords when the user clicks on <span> (x)
        closeButton.onclick = function() {
            forbiddenWords.style.display = "none";
        }

        // Close the forbiddenWords when the user clicks anywhere outside of the forbiddenWords
        window.onclick = function(event) {
            if (event.target === forbiddenWords) {
                forbiddenWords.style.display = "none";
            }
        }