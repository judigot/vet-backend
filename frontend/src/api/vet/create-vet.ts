/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IVet } from "../../interfaces/interfaces";

type IBody = Omit<IVet, 'id'>;

export const createVet = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/vets`,
    body: JSON.stringify(formData),
  });
  return result;
};

