<section class="bids-and-awards section" id="bids-and-awards">
        <div class="container py-5">
            <h2 class="mb-4 text-primary">Bids and Awards</h2>
            <div class="accordion" id="bidsAwardsAccordion">
            <!-- Accordion Items -->
            <!-- Example for 3 items, repeat pattern up to 120 -->
            <!-- For brevity, only first 3 and last 2 items are shown, fill in the rest as needed -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="baHeading1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse1" aria-expanded="true" aria-controls="baCollapse1">
                    Bid Opportunity #1
                </button>
                </h2>
                <div id="baCollapse1" class="accordion-collapse collapse show" aria-labelledby="baHeading1" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #1.<br>
                    <a href="/docs/bids/bid1.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="baHeading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse2" aria-expanded="false" aria-controls="baCollapse2">
                    Bid Opportunity #2
                </button>
                </h2>
                <div id="baCollapse2" class="accordion-collapse collapse" aria-labelledby="baHeading2" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #2.<br>
                    <a href="/docs/bids/bid2.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="baHeading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse3" aria-expanded="false" aria-controls="baCollapse3">
                    Bid Opportunity #3
                </button>
                </h2>
                <div id="baCollapse3" class="accordion-collapse collapse" aria-labelledby="baHeading3" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #3.<br>
                    <a href="/docs/bids/bid3.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            </div>
            <!-- ...repeat for items 4 to 119... -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="baHeading119">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse119" aria-expanded="false" aria-controls="baCollapse119">
                    Bid Opportunity #119
                </button>
                </h2>
                <div id="baCollapse119" class="accordion-collapse collapse" aria-labelledby="baHeading119" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #119.<br>
                    <a href="/docs/bids/bid119.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="baHeading120">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse120" aria-expanded="false" aria-controls="baCollapse120">
                    Bid Opportunity #120
                </button>
                </h2>
                <div id="baCollapse120" class="accordion-collapse collapse" aria-labelledby="baHeading120" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #120.<br>
                    <a href="/docs/bids/bid120.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            </div>
            <!-- END ACCORDION ITEMS -->
            </div>
        </div>
        <script>
            // Optionally, you can generate the accordion dynamically with JS for maintainability
            // Example:
            /*
            const accordion = document.getElementById('bidsAwardsAccordion');
            for(let i=1; i<=120; i++) {
            const item = document.createElement('div');
            item.className = 'accordion-item';
            item.innerHTML = `
                <h2 class="accordion-header" id="baHeading${i}">
                <button class="accordion-button${i===1?'':' collapsed'}" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse${i}" aria-expanded="${i===1?'true':'false'}" aria-controls="baCollapse${i}">
                    Bid Opportunity #${i}
                </button>
                </h2>
                <div id="baCollapse${i}" class="accordion-collapse collapse${i===1?' show':''}" aria-labelledby="baHeading${i}" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #${i}.<br>
                    <a href="/docs/bids/bid${i}.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            `;
            accordion.appendChild(item);
            }
            */
        </script>
    </section>