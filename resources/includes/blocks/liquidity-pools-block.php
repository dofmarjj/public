<section class="_indent main-img client-deal">
    <div class="_container client-deal-block">
        <img class="img-phone" src="/assets/img/mob-deal.png" alt="" />
        <div class="client-deal-text text-white">
            <h2 class="title client-deal-title">
                {!! $blocks->get('deal_liquidity_pools') !!}
            </h2>
            <p class="subtitle client-deal-subtitle">
                {!! $blocks->get('deal_technical_base') !!}
            </p>
            <ul class="client-deal-list">
                <li class="client-deal-item">
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.45 15.5C10.8667 15.9167 11.3917 16.1127 12.025 16.088C12.6583 16.0633 13.1167 15.834 13.4 15.4L19 7L10.6 12.6C10.1667 12.9 9.92933 13.354 9.888 13.962C9.84667 14.57 10.034 15.0827 10.45 15.5ZM5.1 20C4.73333 20 4.396 19.9207 4.088 19.762C3.78 19.6033 3.534 19.366 3.35 19.05C2.91667 18.2667 2.58333 17.4543 2.35 16.613C2.11667 15.7717 2 14.9007 2 14C2 12.6167 2.26267 11.3167 2.788 10.1C3.31333 8.88333 4.02567 7.825 4.925 6.925C5.82433 6.025 6.88267 5.31267 8.1 4.788C9.31733 4.26333 10.6173 4.00067 12 4C13.3667 4 14.65 4.25833 15.85 4.775C17.05 5.29167 18.1 5.996 19 6.888C19.9 7.78 20.6167 8.82167 21.15 10.013C21.6833 11.2043 21.9583 12.4833 21.975 13.85C21.9917 14.7667 21.8877 15.6627 21.663 16.538C21.4383 17.4133 21.0923 18.2507 20.625 19.05C20.4417 19.3667 20.196 19.6043 19.888 19.763C19.58 19.9217 19.242 20.0007 18.874 20H5.1Z"
                            fill="#FF9000" />
                    </svg>
                    <p>{!! $blocks->get('deal_execution_time') !!} <span>11 мс</span></p>
                </li>
                <li class="client-deal-item">
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 10.09L22.45 11.58L21.8 8.77L24 6.89L21.11 6.64L20 4L18.87 6.64L16 6.89L18.18 8.77L17.5 11.58L20 10.09ZM23 23H17V13H23V23ZM1 17V23H7V17H1ZM5 21H3V19H5V21ZM9 10V23H15V10H9ZM13 21H11V12H13V21Z"
                            fill="#FF9000" />
                    </svg>
                    <p>{!! $blocks->get('deal_over_limit') !!} <span>7000 {!! $blocks->get('currencies_trading') !!}</span> {!! $blocks->get('deal_operations_per_second') !!}</p>
                </li>
                <li class="client-deal-item">
                    <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 18V16H10.5L2 7.5L3.4 6.1L12 14.675L17.2 9.475C17.1333 9.325 17.0833 9.171 17.05 9.013C17.0167 8.855 17 8.684 17 8.5C17 7.8 17.2417 7.20833 17.725 6.725C18.2083 6.24167 18.8 6 19.5 6C20.2 6 20.7917 6.24167 21.275 6.725C21.7583 7.20833 22 7.8 22 8.5C22 9.2 21.7583 9.79167 21.275 10.275C20.7917 10.7583 20.2 11 19.5 11C19.35 11 19.2043 10.9877 19.063 10.963C18.9217 10.9383 18.784 10.9007 18.65 10.85L13.5 16H20V18H4Z"
                            fill="#FF9000" />
                    </svg>
                    <p>
                        <span>{!! $blocks->get('deal_data_center') !!}</span> {!! $blocks->get('deal_zero_latency') !!}
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>