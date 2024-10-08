/* Owner: App Scaffolder */
export interface ICustomer {
  customer_id: number;
  name: string;
}

export function isICustomer(data: unknown): data is ICustomer {
  return (
    data !== null &&
    typeof data === 'object' &&
    'customer_id' in data &&
    'name' in data &&
    typeof data.customer_id === 'number' &&
    typeof data.name === 'string'
  );
}

export function isICustomerArray(data: unknown): data is ICustomer[] {
  return Array.isArray(data) && data.every(isICustomer);
}
